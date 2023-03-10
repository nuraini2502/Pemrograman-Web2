<?php
if (isset($_GET['submit'])) {

    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "Rata-rata Nilai " . ($uts + $uas + $praktikum) / 3;
} else {
    echo "Tidak Ada Data!";
}
