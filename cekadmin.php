<?php
session_start();

//cek apakah user sudah login dengan benar
if (!isset($_SESSION['username'])) {
    die("Anda Belum Login");//
}

// Cek Level User
if ($_SESSION['level'] != "Administrator") {
    die("anda bukan admin");
}
