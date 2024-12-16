<?php
// Mengambil koneksi ke database
include "../../koneksi.php";

// Memeriksa apakah form telah disubmit
if(isset($_POST['submit'])) {
  // Mengambil data dari form
  $id_jabatan = $_POST['id_jabatan'];
  $nama_jabatan = $_POST['nama_jabatan'];
  $gaji_pokok = $_POST['gaji_pokok'];

  // Mengupdate data di dalam tabel jabatan
  $sql = "UPDATE jabatan SET nama_jabatan='$nama_jabatan', gaji_pokok='$gaji_pokok' WHERE id_jabatan='$id_jabatan'";
  if(mysqli_query($koneksi, $sql)){
    header("location:../tampilan/data_jabatan.php");
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}

// Menampilkan data jabatan yang akan diupdate
$id_jabatan = $_GET['id_jabatan'];
$sql = "SELECT * FROM jabatan WHERE id_jabatan='$id_jabatan'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

// Menutup koneksi
mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK AL-FAIRUZ</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <div class="container">
        <div class="side-kiri">
            <div class="identitas">
                <div class="logo">
                    <img src="../../gambar/logotk.jpg">
                </div>
                <div class="judul">
                TK AL-FAIRUZ
                </div>
            </div>
            <div class="side-menu">
                <img src="../../gambar/dashboard.png">
                <a href="../beranda.php">Beranda</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/jabatan.png">
                <a href="../tampilan/data_jabatan.php">Data Guru</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_karyawan.php">Data Pendaftar</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="../tampilan/data_penggajian.php">Penggajian Guru</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/laporan.png">
                <a href="../tampilan/laporan.php">Laporan</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Dashboard</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <form method="POST" action="">
                    <div class="label">ID Guru</div>
                    <input type="text" name="id_jabatan" value="<?php echo $data['id_jabatan']; ?>" readonly>
                    <div class="label">Nama Guru</div>
                    <input type="text" name="nama_jabatan" value="<?php echo $data['nama_jabatan']; ?>">
                </div>
                <div class="kotak_input">
                    <div class="label">Gaji Pokok</div>
                    <input type="text" name="gaji_pokok" value="<?php echo $data['gaji_pokok']; ?>">
                    <input type="submit" value="EDIT" name="submit"  onclick="return confirm('Apakah anda yakin mengedit data?')">
                    </form>
                    <a href='../tampilan/data_jabatan.php' ><button>CANCEL</button></a>
                </div>
            </div>
            <div class="kaki">
            Copyright @ 2023 TK AL-FAIRUZ
            </div>
        </div>
    </div>
    
</body>
</html>