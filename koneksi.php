<?php
    $koneksi=mysqli_connect("localhost","root","","logindb1");
    //cek koneksi
    if (mysqli_connect_error()) {
        echo "koneksi data basegagal:", mysqli_connect_eror();
    }else{
    echo "Berhasil";
    }
    ?>