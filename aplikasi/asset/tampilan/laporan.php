<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Al - Fairuz</title>
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
                <a href="data_jabatan.php">Data Guru</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="data_karyawan.php">Data Pendaftar</a>
            </div>
            <!-- <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="data_penggajian.php">Penggajian Guru</a>
            </div> -->
            <div class="side-menu">
                <img src="../../gambar/laporan.png">
                <a href="laporan.php">Laporan</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Laporan Pendaftaran</h1>
            </div>
            <div class="halaman-data">
            <div class="kotak_search">
                    <div class="kotak_tambah">
                        <div class="tambah">
                        <a href="export_excel.php"><button>Export Laporan Excell</button></a>
                        </div>
                    </div>
                    
                    <div class="kotak_cari">
                        <form action="cari_penggajian.php" method="POST">
                        <input hidden type="text" name="cari" placeholder="Masukan Kata Kunci">
                    </div>
                        
                </div>
                <table class="tabel1">
                    <tr>
                    <th>No</th>
                    <th>ID Pendaftar</th>
                    <th>Nama Pendaftar</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"SELECT * FROM tbl_siswa");
                        while($row = mysqli_fetch_array($data)){

                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['no_pendaftaran']; ?></td>
                        <td><?php echo $row['nama_lengkap']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['no_hp']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                            
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                
                    
                </table>
            </div>
            <div class="kaki">
            Copyright @ 2023 TK AL-FAIRUZ
            </div>
        </div>
    </div>
    
</body>
</html>