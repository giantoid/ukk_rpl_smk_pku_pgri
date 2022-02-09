<?php

// Menangkap isi variabel dari file yang telah kita isi pada form.php
$nik = $_POST['nik'];
$nama = $_POST['nama'];
// Format data yang akandiparsing
$data = "\n $nik|$nama";

// Buka file mhs.txt, kemudian tuliskan isi variabel di atas kedalam mhs.txt
$fh = fopen("../data/user.txt", "a");
fwrite($fh, $data);

// Tutup file data.txt
fclose($fh);

session_start();

$_SESSION['success'] = "Berhasil membuat akun, silahkan login!";

header('Location: ../login.php');
