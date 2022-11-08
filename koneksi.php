<?php
    error_reporting(0);
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "utspab";
    $connection = mysqli_connect($host, $username, $password, $db);
    if(!$koneksi){
        die("Tidak bisa terkoneksi ke database");
    }
?>