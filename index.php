<?php
require_once ("connection/dbcon.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Upload Image Only</h1>
        <div>
            <form class="col col-sm-12 col-md-12" action="upload.php" method="post" enctype="multipart/form-data">
                <input class="form-control mt-4" type="text" name="fullname" id="" placeholder="full name"><br>
                <input class="form-control mt-2" type="file" name="image" id="" value="upload image"><br>
                <input class="btn btn-lg btn-block btn-secondary    col-md-12" type="submit" value="Upload"
                    name="submit">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>