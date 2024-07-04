<!DOCTYPE html>
<html lang="en">
<?php
// // require_once ("connection/dbcon.php");
// // $sql = "SELECT * FROM user_uploads WHERE image ='$image'";
// // $result = mysqli_query($dbcon, $sql);
// // if (mysqli_num_rows($result) > 0) {
// //     while ($row = mysqli_fetch_array($result)) {
// //         $fullname = $row["fullname"];
// //         $image = $row["image"];
// //     }
// }
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once ("connection/dbcon.php");
    $sql = "SELECT * FROM user_uploads";
    $result = mysqli_query($dbcon, $sql);

    while ($row = mysqli_fetch_array($result)) {
        $fullname = $row["FULLNAME"];
        $image = $row["image"];
        $imageUrl = "uploads/$image";
        $registration_date = $row["SUBMISSION_DATE"];
        ?>
        <div class="container">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $imageUrl ?>" class=" img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $fullname ?>
                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional
                                content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">
                                    uploaded: <?php echo $registration_date ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    ?>

</body>

</html>