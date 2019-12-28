<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'toko';

    $koneksi = new mysqli(
        $host,
        $username,
        $password,
        $database
    );

    if ($koneksi->connect_error) {
        die('koneksi ke database gagal');
    }
    // else {
    //     echo 'koneksi ke database berhasil';
    // }

?>