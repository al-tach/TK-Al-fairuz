<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel Dengan PHP</title>
</head>

<body>

    <?php
	    header("Content-type: application/vnd-ms-excel");
	    header("Content-Disposition: attachment; filename=Laporan Data Pendaftaran Siswa.xls");
	?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>ID Pendaftar</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Provinsi</th>
            <th>Nomer Handphone</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Anak Ke</th>
        </tr>
        <?php 
            include '../../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM tbl_siswa");
            while($row = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['no_pendaftaran']; ?></td>
            <td><?= $row['nama_lengkap']; ?></td>
            <td><?= $row['nama_panggilan']; ?></td>
            <td><?= $row['jk']; ?></td>
            <td><?= $row['tgl_lahir']; ?></td>
            <td><?= $row['agama']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['desa']; ?></td>
            <td><?= $row['kecamatan']; ?></td>
            <td><?= $row['provinsi']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td><?= $row['nama_ayah']; ?></td>
            <td><?= $row['nama_ibu']; ?></td>
            <td><?= $row['anak_ke']; ?></td>
        </tr>
        <?php 
		}
		?>
    </table>
</body>

</html>