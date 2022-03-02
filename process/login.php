<?php

// Menangkap isi variabel dari file yang telah kita isi pada form.php
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$userlist = file('../data/user.txt');

$success = false;
foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if (trim($user_details[0]) == $nik && trim($user_details[1]) == $nama) {
        $success = true;
        break;
    }
}

session_start();

if ($success) {
    header('Location: ../home.php');
    $_SESSION['nik'] = $nik;
} else {
    $_SESSION['error'] = "NIK atau nama tidak ditemukan!";

    header('Location: ../login.php');
}
