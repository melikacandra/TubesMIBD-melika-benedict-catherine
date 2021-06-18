<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    if(!$koneksi){
        die("Koneksi gagal : ".mysql_connect_error());
    }
    else{
        echo "koneksi berhasil";
    }
?>
