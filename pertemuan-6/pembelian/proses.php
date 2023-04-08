<?php
require_once '../dbkoneksi.php';
?>
<?php
$_tanggal = $_POST['tanggal'];
$_nomor = $_POST['nomor'];
$_jumlah = $_POST['jumlah'];
$_harga = $_POST['harga'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tanggal; //1
$ar_data[] = $_nomor; //2
$ar_data[] = $_jumlah; //3
$ar_data[] = $_harga; //4

if ($_proses == "Simpan") {
   //dta baru
   $sql = "INSERT INTO pembelian (tanggal,nomor,jumlah,harga) VALUES (?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit'];
   $sql = "UPDATE pembelian SET tanggal=?, nomor=?, jumlah=?, harga=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location:index.php');
?>