<?php
include('db.php');
$npm = $_POST['npm'];
$tiga = $_POST['tiga'];
$empat = $_POST['empat'];

$sql = "SELECT * FROM `mahasiswa` WHERE `npm` = '$npm'";
$query = mysqli_query($link,$sql);
$row = mysqli_fetch_row($query);
$nama = $row[1];
$satu =strtoupper($row[3]);
$dua = strtoupper($row[4]);

$sql = "INSERT INTO `$database`.`data` (`id`, `nama`, `npm`, `satu`, `dua`, `tiga`, `empat`, `waktu`) VALUES (NULL, '$nama', '$npm', '$satu', '$dua', '$tiga', '$empat', CURRENT_TIMESTAMP);";
mysqli_query($link,$sql);
header('Location:data.php');
?>