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


    <?php
    include "../../koneksi.php";

    $no_pendaftaran = $_GET['no_pendaftaran'];
    $sql = "SELECT * FROM tbl_siswa WHERE no_pendaftaran='$no_pendaftaran'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $no_pendaftaran = $row['no_pendaftaran'];
        $nama_lengkap = $row['nama_lengkap'];
        $nama_panggilan = $row['nama_panggilan'];
        $jk = $row['jk'];
        $tgl_lahir = $row['tgl_lahir'];
        $agama = $row['agama'];
        $alamat = $row['alamat'];
        $desa = $row['desa'];
        $kecamatan = $row['kecamatan'];
        $provinsi = $row['provinsi'];
        $no_hp = $row['no_hp'];
        $nama_ayah = $row['nama_ayah'];
        $nama_ibu = $row['nama_ibu'];
        $anak_ke = $row['anak_ke'];
    }
    ?>

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
            <!-- <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="../tampilan/data_penggajian.php">Penggajian</a>
            </div> -->
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
                <div class="judul-detail">Detail Data Siswa</div>
                <div class="link"><a href="data_karyawan.php">Data Siswa</a></div>
            </div>
            <div class="kotak-judul-detail">
                Detail Data Siswa
            </div>
            <div class="halaman-beranda">
                <!-- <div class="detail-foto">
                    <img src="../../gambar/foto/<?php echo $foto; ?>">
                    <br>
                    <h4><!?php echo $no_pendaftaran; ?></h4>
                    <h3><!?php echo $nama_lengkap; ?></h3>
                    <h4><!?php echo $nama_jabatan; ?></h4>
                </div> -->
                <div class="detail-identitas">
                    <br>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">ID Pendaftaran</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $no_pendaftaran; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nama Lengkap</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $nama_lengkap; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Jenis Kelamin</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $jk; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Tanggal Lahir</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $tgl_lahir; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Agama</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $agama; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Alamat</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $alamat; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Desa</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $desa; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Kecamatan</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $kecamatan; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Provinsi</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $provinsi; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nomor Handphone</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $no_hp; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nama Ayah</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $nama_ayah; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nama Ibu</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $nama_ibu; ?>
                        </div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Anak ke</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan">
                            <?php echo $anak_ke; ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="kaki">
                Copyright @ 2023 TK AL-FAIRUZ
            </div>
        </div>

</body>

</html>