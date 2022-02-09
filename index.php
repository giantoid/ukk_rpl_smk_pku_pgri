<?php
session_start();

if ($_SESSION['nik']) {
    header('Location: home.php');
} else {
    header('Location: login.php');
}
