<?php

// Pengecekan sebelum halaman load
// apakah ada session role
// kalau ada maka arahkan ke halaman berdasarkan role masing2
if (isset($_SESSION['role'])) {
    header('Location: ' . $_SESSION['role'] . '.php');
}


?>
