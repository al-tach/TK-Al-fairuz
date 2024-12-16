<?php
include '../../koneksi.php';
extract($_POST);
$id_jabatan = $_GET['id_jabatan'];

$query = mysqli_query($koneksi, "DELETE FROM jabatan WHERE id_jabatan='$id_jabatan'");

header("location:data_jabatan.php");

?>