<?php

$host = "localhost";
$user = "root";
$pass = "ramadhan1900";
$db = "akademik";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("tidak dapat konek");
}


$npm = "";
$name = "";
$alamat = "";
$faculty = "";
?>
