<?php
require_once ("connection/dbcon.php");

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $image = $_FILES["image"]["name"];
    echo "$image";
    $erros = [];

    if (empty($fullname) && empty($image)) {
        echo "<script>alert('please fill all fields')</script>";
    }
    if (empty($fullname)) {
        echo "<script>alert('name is empty')</script>";
    }
    if (empty($image)) {
        echo "<script>alert('please upload your image')</script>";
    }

}

