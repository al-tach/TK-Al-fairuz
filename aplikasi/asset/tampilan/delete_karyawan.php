<?php
include '../../koneksi.php';
extract($_POST);
$no_pendaftaran = $_GET['no_pendaftaran'];

$query = mysqli_query($koneksi, "DELETE FROM tbl_siswa WHERE no_pendaftaran='$no_pendaftaran'");

header("location:data_karyawan.php");

?>d