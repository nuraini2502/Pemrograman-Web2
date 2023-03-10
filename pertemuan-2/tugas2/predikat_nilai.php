<?php
if (isset($_GET['submit'])) {

    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $rata_rata = round (($uts + $uas + $praktikum) / 3, 2);

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "Rata-rata Nilai : $rata_rata <br>";
    if ($rata_rata >= 85){
        echo "Grade : A";
        echo "Sangat Memuaskan";
    }
    elseif ($rata_rata >= 70){
        echo "Grade : B";
        echo " Memuaskan";
    }
    elseif ($rata_rata >= 56){
        echo "Grade : C";
        echo " Cukup";
    }
    elseif ($rata_rata >= 36){
        echo "Grade : D";
        echo " Kurang";
    }
    elseif ($rata_rata >= 0){
        echo "Grade : E";
        echo " Sangat Kurang";
    } else {
        echo " Tidak Ada Grade";
    }

} else {
    echo "Tidak Ada Data!";
}
