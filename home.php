<!doctype html>
<html lang="en">

<?php
session_start();

if (!$_SESSION['nik']) {
    header('Location: login.php');
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" href="assets/img/logo-32.png">
    <title>Peduli Diri</title>
</head>

<body>
    <section class="h-100">
        <div class="container h-100 mt-5">
            <div class="row">
                <div class="col-lg-2">
                    <img src="assets/img/logo-512.png" width="150" alt="logo-512">
                </div>
                <div class="col-lg-10">
                    <div class="mt-3">
                        <h1>PEDULI DIRI</h1>
                        <h6 class="mt-3">Catatan Perjalanan</h6>
                        <!-- <a href="" class="active">Home</a> | <a href="">Catatan Perjalanan</a> | <a href="">Isi Data</a> -->
                        <div class="row">
                            <div class="col-lg-9">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="catatan-perjalanan">Catatan Perjalanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="catatan-perjalanan/isi-data.php">Isi Data</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-1">
                                <a href="process/logout.php" class="btn btn-outline-secondary float-end">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 mt-3">
                        <div class="card" style="height: 20rem;">
                            <div class=" card-body">
                                Selamat datang di Aplikasi Peduli Diri!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>