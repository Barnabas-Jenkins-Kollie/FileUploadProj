<?php
require_once ("connection/dbcon.php");

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $image = $_FILES["image"]["name"];
    $tmpname = $_FILES["image"]["tmp_name"];
    $target_path = "uploads/$image";
    $fileextention = pathinfo($image, PATHINFO_EXTENSION);
    $allowImgType = array("jpg", "jpeg", "png", "gif");

    if (empty($fullname) && empty($image)) {
        echo "<script>alert('please fill all fields')</script>";
    }
    if (empty($fullname)) {
        echo "<script>alert('name is empty')</script>";
    }
    if (empty($image)) {
        echo "<script>alert('please upload your image')</script>";
    }   // search if email already exist

    $sql_email = "SELECT * FROM user_uploads WHERE image ='$image'";
    $result = mysqli_query($dbcon, $sql_email);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('image already exist')</script>";
    } else {
        if (in_array($fileextention, $allowImgType)) {
            if (move_uploaded_file($tmpname, $target_path)) {
                $sql = "INSERT INTO user_uploads (FULLNAME, image) values(?,?)";
                $stmt = mysqli_stmt_init($dbcon);
                $prepare_stmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepare_stmt) {
                    mysqli_stmt_bind_param($stmt, "ss", $fullname, $image);
                    mysqli_stmt_execute($stmt);
                    echo "<script>alert('upload successful')</script>";
                    echo "<script>location.href = 'users_profile.php'</script>";
                }

            }
        } elseif (!in_array($fileextention, $allowImgType)) {
            echo "<script>alert('This file type is not needed! image only')</script>";
            echo "<script>location.href ='index.php'</script>";
        }
    }


}

