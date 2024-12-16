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
                <h1>Data Guru</h1>
            </div>
            <div class="halaman-data">
                <div class="tambah">
                <a href="../input/input_jabatan.php"><button>Tambah Data Guru</button></a>
                </div>
                <table class="tabel1">
                    <tr>
                    <th>No</th>
                    <th>ID Guru</th>
                    <th>Nama Guru</th>
                    <th>Gaji Pokok</th>
                    <th colspan="2">Aksi</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from jabatan");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_jabatan']; ?></td>
                        <td><?php echo $row['nama_jabatan']; ?></td>
                        <td><?php echo $row['gaji_pokok']; ?></td>
                        <td>
                            <div class="aksi_edit">
                            <a href='../input/edit_jabatan.php?id_jabatan=<?php echo $row['id_jabatan']; ?>'><button>Edit</button></a>
                            </div>
                        </td>
                        <td>
                        <div class="aksi_hapus">
                        <a href='delete_jabatan.php?id_jabatan=<?php echo $row['id_jabatan']; ?>' onclick="return confirm('Apakah anda yakin hapus data ini?')"><button>Hapus</button></a>
                            </div>
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