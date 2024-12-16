
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
                <h1>Form Data Siswa</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <form method="post" action="proses_edit_karyawan.php" enctype="multipart/form-data">
                    <div class="label">ID Pendaftran</div>
                    <input type="text" name="no_pendaftaran" value="<?php echo $no_pendaftaran; ?>" readonly>
                    <div class="label">Nama Lengkap</div>
                    <input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" readonly>
                    <div class="label">Nama Panggilan</div>
                    <input type="text" name="nama_panggilan" value="<?php echo $nama_panggilan; ?>" readonly>
                    <div class="label">Jenis Kelamin</div>
                    <select  name="jk" value="<?php echo $jk; ?>">
                            <option value="">-- Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select >                    
                    <div class="label">Tanggal Lahir</div>
                    <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
                    <div class="label">Agama</div>
                    <select  name=agama value="<?php echo $agama; ?>">
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    
                    <div class="label">Alamat</div>
                    <input type="text" name="alamat" value="<?php echo $alamat; ?>">
                </div>
                <div class="kotak_input">
                    <div class="label">Desa</div>
                    <input type="text" name="desa" value="<?php echo $desa; ?>">
                    <div class="label">Kecamatan</div>
                    <input type="text" name="kecamatan" value="<?php echo $kecamatan; ?>">
                    <div class="label">Provinsi</div>
                    <input type="text" name="provinsi" value="<?php echo $provinsi; ?>">
                    <div class="label">Nomor Telepon</div>
                    <input type="text" name="no_hp" value="<?php echo $no_hp; ?>">
                    <div class="label">Nama Ayah</div>
                    <input type="text" name="nama_ayah" value="<?php echo $nama_ayah; ?>">
                    <div class="label">Nama Ibu</div>
                    <input type="text" name="nama_ibu" value="<?php echo $nama_ibu; ?>">
                    <div class="label">Anak Ke</div>
                    <select  name="anak_ke" value="<?php echo $anak_ke; ?>">
                            <option value="">-- Pilih Anak Ke --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select >
                    <div class="label">&nbsp;</div>
                    <input type="submit" value="EDIT" name="submit" onclick="return confirm('Apakah anda yakin mengedit data?')">
                    </form>
                    <a href='../tampilan/data_karyawan.php' ><button>CANCEL</button></a>
                </div>
            </div>
            <div class="kaki">
            Copyright @ 2023 TK AL-FAIRUZ
            </div>
        </div>
    </div>
    
</body>
</html>