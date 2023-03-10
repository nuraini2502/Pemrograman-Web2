<!-- <?php
    $_nama = ' Nuraini';
    $_usia = 19;
    $_berat = 51.5;
    $_alamat = "Jl. Kesana Kesini II No.123";
    $_sudah_menikah = FALSE;
    define('Sekolah','STTNF');
    define('PHI',3.14);
?>

<h1>Selamat Belajar PHP</h1>
<?php
    echo 'Nama Siswa'.$_nama.' kuliah di '.Sekolah;
?>
<br/>
Nama Lengkap : <?=$_nama?>
<br/>
Nilai PHI adalah <?=PHI?>
<hr/>
<?php 
    echo "Nama Mahasiswa $_nama Umur $_usia Tahun";
?>
<hr/>
<h1>Variable Sistem</h1>
<?php
    echo 'DOCUMENT ROOT: '.$_SERVER['DOCUMENT_ROOT'];
    echo '<br/>nama file: '.$_SERVER['SCRIPT_FILENAME'];
?>

<?php
    $status =($_sudah_menikah)? "Sudah Menikah" : "Belum Menikah";
    echo '<br>'.$status;
?> -->

<?php 
$x =20;

$y =12;

if($y>=$x){

echo $y;

}
?>