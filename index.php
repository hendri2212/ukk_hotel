<?php include 'database/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Hebat</title>

    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3">
            <a href="/hotel" class="h1 text-info text-decoration-none">Hotel Hebat</a>
            <div class="">
                <a href="?page=home" class="btn btn-sm btn-success ml-2">Home</a>
                <a href="?page=room" class="btn btn-sm btn-success ml-2">Kamar</a>
                <a href="?page=facility" class="btn btn-sm btn-success ml-2">Fasilitas</a>
            </div>
        </div>
        <img src="asset/images/banner-01.jpg" alt="hotel hebat" class="img-fluid rounded-4">
        
        <?php include_once "./route.php"; ?>
    </div>
</body>
</html>