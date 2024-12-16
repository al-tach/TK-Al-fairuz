<?php
include "../../koneksi.php";

$id_karyawan = $_POST['id_karyawan'];
$id_jabatan = $_POST['id_jabatan'];
$nama_karyawan = $_POST['nama_karyawan'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$pendidikan = $_POST['pendidikan'];
$tgl_mulai_kerja = $_POST['tgl_mulai_kerja'];
$status_karyawan = $_POST['status_karyawan'];
$email = $_POST['email'];
$no_rek = $_POST['no_rek'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Set path file upload
$path = "../../gambar/foto/".$foto;

// Upload file
move_uploaded_file($tmp, $path);

// Insert data karyawan ke database
$sql = "INSERT INTO karyawan (id_karyawan, id_jabatan, nama_karyawan, jk, tempat_lahir, tgl_lahir, agama, alamat, no_telp, pendidikan, tgl_mulai_kerja, status_karyawan, email, no_rek, foto) VALUES ('$id_karyawan', '$id_jabatan','$nama_karyawan', '$jk', '$tempat_lahir','$tgl_lahir','$agama','$alamat','$no_telp','$pendidikan','$tgl_mulai_kerja','$status_karyawan','$email','$no_rek','$foto')";
if (mysqli_query($koneksi, $sql)) {
    header("location:../tampilan/data_karyawan.php");
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}

mysqli_close($conn);
?>