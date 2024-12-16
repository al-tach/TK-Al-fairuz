<?php
// Includ../../e file koneksi
include '../../koneksi.php';

// Inisialisasi variabel
$id_penggajian = "";
$id_karyawan = "";
$tgl_penggajian = "";
$lembur = "";
$potongan = "";

// Tangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_penggajian = $_POST["id_penggajian"];
    $id_karyawan = $_POST["id_karyawan"];
    $tgl_penggajian = $_POST["tgl_penggajian"];
    $lemburan = $_POST["lemburan"];
    $potong = $_POST["potong"];

    // Query untuk mengambil gaji_pokok berdasarkan id_karyawan dan id_jabatan
    $query = "SELECT jabatan.gaji_pokok
              FROM karyawan
              INNER JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan
              WHERE karyawan.id_karyawan = '$id_karyawan'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Ambil gaji_pokok dari hasil query
        $row = mysqli_fetch_assoc($result);
        $gaji_pokok = $row["gaji_pokok"];

        // Hitung gaji_total
        $lembur = $lemburan * 15000;
        $potongan = $potong * 25000;
        $total_gaji = $gaji_pokok + $lembur - $potongan;

        // Query untuk memasukkan data penggajian ke tabel penggajian
        $insertQuery = "INSERT INTO penggajian (id_penggajian, id_karyawan, tgl_penggajian, lembur, potongan, total_gaji)
                        VALUES ('$id_penggajian','$id_karyawan', '$tgl_penggajian', '$lembur', '$potongan', '$total_gaji')";

        if (mysqli_query($koneksi, $insertQuery)) {
            header("location:../tampilan/data_penggajian.php");
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
