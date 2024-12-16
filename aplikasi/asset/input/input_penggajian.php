
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
                <h1>Form Data Penggajian</h1>
            </div>
            <div class="halaman-beranda">
                
                <div class="kotak_input">

                <form method="post" action="proses_input_penggajian.php" enctype="multipart/form-data">
                    <div class="label">ID Penggajian</div>
                    <input type="text" name="id_penggajian" placeholder="PG00001">
                    <div class="label">ID Karyawan</div>
                        <select  name="id_karyawan">
                        <option>-- ID Karyawan --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from karyawan");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[id_karyawan]'>
										$hasil[id_karyawan] -> $hasil[nama_karyawan]";
		
										}
		
									?>

                        </select >
                    <div class="label">Tanggal Penggajian</div>
                    <input type="date" name="tgl_penggajian" placeholder="Masukan Nama">                    
                </div>
                <div class="kotak_input">
                    <div class="label">Lembur</div>
                    <input type="text" name="lemburan" placeholder="Masukan Jumlah Jam Lembur">
                    <div class="label">Potongan</div>
                    <input type="text" name="potong" placeholder="Masukan Jumlah Hari Ketidakhadiran">
                    <div class="label">&nbsp;</div>
                    <input type="submit" value="SIMPAN" name="submit">
                    </form>
                    <a href='../tampilan/data_penggajian.php' ><button>CANCEL</button></a>
                </div>
            </div>
            <div class="kaki">
            Copyright @ 2023 TK AL-FAIRUZ
            </div>
        </div>
    </div>
    
</body>
</html>