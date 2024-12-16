<?php
include "../../koneksi.php";

$no_pendaftaran = $_POST['no_pendaftaran'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST['nama_panggilan'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$provinsi = $_POST['provinsi'];
$no_hp = $_POST['no_hp'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$anak_ke = $_POST['anak_ke'];

if ($foto) {
    // Set path file upload
    $path = "../../gambar/foto/".$foto;

    // Upload file
    move_uploaded_file($tmp, $path);

    // Update data siswa dengan foto baru
    $sql = "UPDATE tbl_siswa SET no_pendaftaran='$no_pendaftaran', nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', jk='$jk', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$alamat', desa='$desa', kecamatan='$kecamatan', provinsi='$provinsi', no_hp='$no_hp', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu',anak_ke='$anak_ke' WHERE no_pendaftaran='$no_pendaftaran'";
} else {
    // Update data siswa tanpa foto baru
    $sql = "UPDATE tbl_siswa SET no_pendaftaran='$no_pendaftaran', nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', jk='$jk', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$alamat', desa='$desa', kecamatan='$kecamatan', provinsi='$provinsi', no_hp='$no_hp', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu',anak_ke='$anak_ke' WHERE no_pendaftaran='$no_pendaftaran'";
}

if (mysqli_query($koneksi, $sql)) {
    header("location:../tampilan/data_karyawan.php");
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}

mysqli_close($conn);
?>