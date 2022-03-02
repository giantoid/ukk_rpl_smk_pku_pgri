<?php

// Menangkap isi variabel dari file yang telah kita isi pada form.php
$nik = $_POST['nik'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$data = "\n $nik|$tanggal|$waktu|$lokasi|$suhu";

// Buka file mhs.txt, kemudian tuliskan isi variabel di atas kedalam mhs.txt
$fh = fopen("../data/catatan-perjalanan.txt", "a");
fwrite($fh, $data);

// Tutup file data.txt
fclose($fh);

session_start();

$_SESSION['success'] = "Berhasil menyimpan data!";

header('Location: ../catatan-perjalanan');
