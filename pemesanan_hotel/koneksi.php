<?php

    $koneksi = mysqli_connect('localhost', 'root', '', 'dbhotel');

    if(!$koneksi) {
        echo "Koneksi Gagal";
    }

?>