<?php

    $nama = "Shifa Ayu Rosdiana";
    $umur = 15;
    $kelas = "X RPL 1";
    $tempatTanggalLahir = "Pemalang, 3 Agustus 2008";
    $nomorWA = "0895379096630";
    $alamat = "Pintu AIR V";

    function MyBiodata(){
        global $nama, $umur, $kelas, $tempatTanggalLahir, $nomorWA, $alamat;
        echo "<h1>===Program Biodata Sederhana Function===</h1> <br />";
        echo "Nama Lengkap : $nama <br />";
        echo "Umur : $umur <br />";
        echo "Kelas : $kelas <br />";
        echo "Tempat/Tanggal Lahir : $tempatTanggalLahir <br />";
        echo "Nomor WA : $nomorWA <br />";
        echo "Alamat : $alamat <br />";
        echo "==============================";
    }
    echo MyBiodata()
    ?>
