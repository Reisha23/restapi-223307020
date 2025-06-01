<?php
$hostname = "localhost";    //host/ip addr database
$database = "db_cloudpnm";  //nama database
$username = "root";         //user database
$password = "223307020";    //password database

//script koneksi ke server database
$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}