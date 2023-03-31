<?php
require_once '../dbkoneksi.php';

//MENANGKAP DATA IDDE DARI URL
$id = $_GET['iddel'];

$dbh->query("DELETE FROM kartu WHERE id=$id");

header('location:index.php');
