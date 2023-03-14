<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "classicmodels";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (!$conn) {
        die("Oops! Koneksi ke database gagal: " . mysqli_connect_error());
    }

?>
