<?php
include 'aplikasi/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture the form data
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $jk = $_POST['jk'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $provinsi = $_POST['provinsi'];
    $anak_ke = $_POST['anak_ke'];
    $tgl_lahir = $_POST['tgl_lahir'];

    // Sanitize input to prevent SQL injection (important)
    $nama_lengkap = mysqli_real_escape_string($koneksi, $nama_lengkap);
    $nama_panggilan = mysqli_real_escape_string($koneksi, $nama_panggilan);
    $jk = mysqli_real_escape_string($koneksi, $jk);
    $nama_ayah = mysqli_real_escape_string($koneksi, $nama_ayah);
    $nama_ibu = mysqli_real_escape_string($koneksi, $nama_ibu);
    $no_hp = mysqli_real_escape_string($koneksi, $no_hp);
    $alamat = mysqli_real_escape_string($koneksi, $alamat);
    $desa = mysqli_real_escape_string($koneksi, $desa);
    $kecamatan = mysqli_real_escape_string($koneksi, $kecamatan);
    $provinsi = mysqli_real_escape_string($koneksi, $provinsi);
    $anak_ke = mysqli_real_escape_string($koneksi, $anak_ke);
    $tgl_lahir = mysqli_real_escape_string($koneksi, $tgl_lahir);

    // SQL query to insert data
    $query = "INSERT INTO `tbl_siswa` (`nama_lengkap`, `nama_panggilan`, `jk`, `nama_ayah`, `nama_ibu`, `no_hp`, `alamat`, `desa`, `kecamatan`, `provinsi`,  `anak_ke`,  `tgl_lahir`)
              VALUES ('$nama_lengkap', '$nama_panggilan', '$jk', '$nama_ayah', '$nama_ibu', '$no_hp', '$alamat', '$desa', '$kecamatan', '$provinsi', '$anak_ke',  '$tgl_lahir')";

$result = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($result) {
    echo "<script>alert('Data berhasil disimpan');</script>";
} else {
    // Error handling if the query fails
    echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
}
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Online TK AL-FAIRUZ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f8fb;
        }
        .wrapper {
            margin-top: 50px;
        }
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .form-label {
            font-weight: bold;
        }
        .invalid-feedback {
            font-size: 0.9em;
            color: #dc3545;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center wrapper">
        <div class="col-md-8 col-lg-6">
            <div class="form-container">
                <h1 class="text-center">Form Pendaftaran Online TK AL-FAIRUZ</h1>
                <form class="needs-validation" method="post" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Masukkan nama lengkap" required>

                            <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                            <input type="text" name="nama_panggilan" class="form-control" id="nama_panggilan" placeholder="Masukkan nama panggilan" required>

                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jk" required>
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>

                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" required>

                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" name="agama" required>
                                <option disabled selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>

                            <label for="no_hp" class="form-label">No. Handphone</label>
                            <input type="tel" name="no_hp" class="form-control" placeholder="Masukkan nomor telepon" required>

                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="desa" class="form-label">Desa</label>
                            <input type="text" name="desa" class="form-control" placeholder="Masukkan desa" required>

                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan kecamatan" required>

                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" placeholder="Masukkan provinsi" required>

                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan nama ayah" required>

                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan nama ibu" required>

                            <label for="anak_ke" class="form-label">Anak Ke</label>
                            <select class="form-select" name="anak_ke" required>
                                <option disabled selected>Pilih Anak Ke</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Saya menyetujui persyaratan yang berlaku
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // JavaScript for client-side form validation
    (function () {
        'use strict'
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation')
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        }, false)
    })();
</script>

</body>
</html>
