
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK AL-FAIRUZ</title>
    <link rel="stylesheet" href="../../../css/style.css">
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
                <a href="../tampilan/data_jabatan.php">Data Jabatan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_karyawan.php">Data Karyawan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="../tampilan/data_penggajian.php">Penggajian</a>
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
                <h1>Form Data Karyawan</h1>
            </div>
            <div class="halaman-beranda">
                
                <div class="kotak_input">

                <form method="post" action="proses_input_karyawan.php" enctype="multipart/form-data">
                    <div class="label">ID Karyawan</div>
                    <input type="text" name="id_karyawan" placeholder="KRY0001">
                    <div class="label">Jabatan</div>
                        <select  name="id_jabatan">
                        <option>-- ID Jabatan --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from jabatan");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[id_jabatan]'>
										$hasil[id_jabatan] -> $hasil[nama_jabatan]";
		
										}
		
									?>

                        </select >
                    <div class="label">Nama Karyawan</div>
                    <input type="text" name="nama_karyawan" placeholder="Masukan Nama">
                    <div class="label">Jenis Kelamin</div>
                    <select  name="jk">
                            <option>-- Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select >
                    <div class="label">Tempat Lahir</div>
                    <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                    <div class="label">Tanggal Lahir</div>
                    <input type="date" name="tgl_lahir" placeholder="Masukan Nama">
                    <div class="label">Agama</div>
                    <select  name="agama">
                            <option>-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select >
                    <div class="label">Alamat</div>
                    <input type="text" name="alamat" placeholder="Masukan Alamat">
                </div>
                <div class="kotak_input">
                    <div class="label">Nomor Telepon</div>
                    <input type="text" name="no_telp" placeholder="08xxxxxxxxxx">
                    <div class="label">Pendidikan</div>
                    <input type="text" name="pendidikan" placeholder="Masukan Pendidikan">
                    <div class="label">Tanggal Mulai Kerja</div>
                    <input type="date" name="tgl_mulai_kerja" placeholder="Masukan Nama">
                    <div class="label">Status Karyawanan</div>
                    <select  name="status_karyawan">
                            <option>-- Pilih Status --</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select >
                    <div class="label">Email</div>
                    <input type="text" name="email" placeholder="email@email.com">
                    <div class="label">No Rekening</div>
                    <input type="text" name="no_rek" placeholder="00000000">
                    <div class="label">Foto</div>
                    <input type="file" name="foto" placeholder="Masukan Nama">
                    <div class="label">&nbsp;</div>
                    <input type="submit" value="SIMPAN" name="submit">
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