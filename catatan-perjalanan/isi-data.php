<!doctype html>
<html lang="en">

<?php
session_start();

if (!$_SESSION['nik']) {
    header('Location: ../login.php');
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" href="../assets/img/logo-32.png">
    <title>Peduli Diri</title>
</head>

<body>
    <section class="h-100">
        <div class="container h-100 mt-5">
            <div class="row">
                <div class="col-lg-2">
                    <img src="../assets/img/logo-512.png" width="150" alt="logo-512">
                </div>
                <div class="col-lg-10">
                    <div class="mt-3">
                        <h1>PEDULI DIRI</h1>
                        <h6 class="mt-3">Catatan Perjalanan</h6>
                        <!-- <a href="" class="active">Home</a> | <a href="">Catatan Perjalanan</a> | <a href="">Isi Data</a> -->
                        </ul>
                        <div class="row">
                            <div class="col-lg-9">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Catatan Perjalanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Isi Data</a>
                                    </li>
                            </div>
                            <div class="col-lg-1">
                                <a href="../process/logout.php" class="btn btn-outline-secondary float-end">Logout</a>
                            </div>
                        </div>
                    </div>
                    <?php session_start() ?>
                    <div class="col-lg-10 mt-3">
                        <div class="card">
                            <div class=" card-body">
                                <form action="proses.php" method="post">
                                    <input type="hidden" name="nik" id="" value="<?= $_SESSION['nik'] ?>">
                                    <div class="mb-3 row">
                                        <label for="tanggal" class="col-lg-3 col-form-label">Tanggal</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="tanggal" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="waktu" class="col-lg-3 col-form-label">Jam</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="waktu" name="waktu">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="lokasi" class="col-lg-3 col-form-label">Lokasi yang dikunjungi</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="lokasi" name="lokasi">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="suhu" class="col-lg-3 col-form-label">Suhu Badan</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="suhu" name="suhu">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>