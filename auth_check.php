<?php


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit; // Pastikan untuk menghentikan eksekusi skrip setelah redirect.
}
?>
