<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK AL-FAIRUZ</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="side-kiri">
            <div class="identitas">
                <div class="logo">
                    <img src="../gambar/logotk.jpg">
                </div>
                <div class="judul">
                    TK AL-FAIRUZ
                </div>
            </div>
            <div class="side-menu">
                <img src="../gambar/dashboard.png">
                <a href="beranda.php">Beranda</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/jabatan.png">
                <a href="tampilan/data_jabatan.php">Data Guru</a>
            </div>
            <div class="side-menu">
                <img src="../gambar/pegawai.png">
                <a href="tampilan/data_karyawan.php">Data Pendaftar</a>
            </div>
            <!-- <div class="side-menu">
                <img src="../gambar/gaji.png">
                <a href="tampilan/data_penggajian.php">Penggajian Guru</a>
            </div> -->
            <div class="side-menu">
                <img src="../gambar/laporan.png">
                <a href="tampilan/laporan.php">Laporan</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../gambar/garis.png"></div>
                <div class="logout"><a href="../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Dashboard</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak-info">
                    <div class="info-karyawan">
                    Pendaftar Laki-laki
                    <h2>					  
                        <?php
                        include "../koneksi.php";
                        $sql = "SELECT COUNT(*) as jumlah_pegawai FROM tbl_siswa where jk='Laki-Laki'";
                        $result = mysqli_query($koneksi, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $jumlah_pegawai = $row['jumlah_pegawai'];
                        echo $jumlah_pegawai;
                        mysqli_close($koneksi);
                        ?>
                    </h2>
                    </div>
                    <div class="info-gambar">
                        <img src="../gambar/laki.png">
                    </div>
                </div>
                <div class="kotak-info">
                <div class="info-karyawan">
                    Pendaftar Perempuan
                    <h2><?php
                        include "../koneksi.php";
                        $sql = "SELECT COUNT(*) as jumlah_pegawai FROM tbl_siswa where jk='Perempuan'";
                        $result = mysqli_query($koneksi, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $jumlah_pegawai = $row['jumlah_pegawai'];
                        echo $jumlah_pegawai;
                        mysqli_close($koneksi);
                        ?>
                    </h2>
                    </div>
                    <div class="info-gambar">
                        <img src="../gambar/perempuan.png">
                    </div>
                </div>
                <div class="kotak-info">
                <div class="info-karyawan">
                    Total Pendaftar
                    <h2><?php
                        include "../koneksi.php";
                        $sql = "SELECT COUNT(*) as jumlah_pegawai FROM tbl_Siswa";
                        $result = mysqli_query($koneksi, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $jumlah_pegawai = $row['jumlah_pegawai'];
                        echo $jumlah_pegawai;
                        mysqli_close($koneksi);
                        ?>
                    </h2>
                    </div>
                    <div class="info-gambar">
                        <img src="../gambar/pegawai.png">
                    </div>
                </div>
            </div>
            <div class="kaki">
                Copyright @ 2023 TK AL-FAIRUZ
            </div>
        </div>
    </div>
</body>
</html>