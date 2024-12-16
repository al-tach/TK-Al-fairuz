<?php
include '../../koneksi.php';
extract($_POST);
$id_penggajian = $_GET['id_penggajian'];

$query = mysqli_query($koneksi, "DELETE FROM penggajian WHERE id_penggajian='$id_penggajian'");

header("location:data_penggajian.php");

?>d