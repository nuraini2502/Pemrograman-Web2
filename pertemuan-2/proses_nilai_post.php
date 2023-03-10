<?php
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $praktikum = $_POST['praktikum'];

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "Rata-rata Nilai " . ($uts + $uas + $praktikum) / 3;
} else {
    echo "Tidak Ada Data!";
}
