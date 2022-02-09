<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../DataTables/datatables.css">

    <link rel="icon" href="../assets/img/logo-32.png">
    <title>Peduli Diri</title>
</head>

<body>
    <?php session_start() ?>
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
                        <ul class="nav nav-tabs col-lg-10">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Catatan Perjalanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="isi-data.php">Isi Data</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 mt-3">
                        <!-- <div class="card mb-2">
                            <div class=" card-body">
                                <div class="row mx-0">
                                    <span class="col-lg-3">
                                        Urutkan berdasarkan
                                    </span>
                                    <form action="" method="post" class="col-lg-4">
                                        <div class="row">
                                            <select class="form-select-sm col-lg-6" aria-label="Default select example">
                                                <option value="tanggal">Tanggal</option>
                                                <option value="suhu">Suhu Tubuh</option>
                                            </select>
                                            <div class="col-lg-5">
                                                <button type="submit" class="btn btn-sm btn-primary">Urutkan</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-lg-5">
                                        <a href="isi-data.php" class="btn btn-sm btn-outline-dark float-end"><b> <b>+</b> </b></a href="">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card" style="height: 30rem;">
                            <div class=" card-body">
                                <table class="table display">
                                    <thead>
                                        <tr>
                                            <th width="20%">Tanggal</th>
                                            <th width="15%">Waktu</th>
                                            <th>Lokasi</th>
                                            <th width="20%">Suhu Tubuh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../DataTables/datatables.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "../data/api.php?nik=" + "<?= $_SESSION['nik'] ?>",
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    var array = [];
                    data.forEach(element => {
                        array.push([
                            element.tanggal,
                            element.waktu,
                            element.lokasi,
                            element.suhu + '&#176;C'
                        ])
                    });
                    $('.table').DataTable({
                        data: array
                    });
                }
            });
        });
    </script>

</body>

</html>