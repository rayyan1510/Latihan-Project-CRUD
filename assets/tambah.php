<?php

// panggil koneksi
include 'config.php';

if (isset($_POST["kirim"])) {
    $nama_dokter = $_POST["nama_dokter"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
    $spesialis = $_POST["spesialis"];
    $kode_poli = $_POST["kode_poli"];

    $query = mysqli_query($conn, "INSERT INTO `tb-dokter` VALUES ('', '$nama_dokter', '$alamat','$telepon', '$spesialis', '$kode_poli')");


    if ($query) {
        # code...
        header('location: ../index.php');
        echo "<script>alert('Data Berhasil Ditambah!');</script>";
    } else {
        header('location: tambah.php');
        echo "<script>alert('Data Gagal Ditambah!');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Apotek</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
    <center>
        <h3>Tambah Data Dokter</h3>
    </center>

    <div class="container pt-4">

        <form action="" method="POST">

            <!-- form nama -->
            <div class="form-group">
                <label for="nama">Nama Dokter</label>
                <input type="text" class="form-control" id="nama" name="nama_dokter">
            </div>
            <!-- akhir form nama -->

            <!-- form alamat -->
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <!-- akhir form alamat -->

            <!-- form telepon -->
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon">
            </div>
            <!-- akhir form telepon -->

            <!-- form spesialis -->
            <div class="form-group">
                <label for="spesialis">Speasialis</label>
                <input type="text" class="form-control" id="spesialis" name="spesialis">
            </div>
            <!-- akhir form spesialis -->

            <!-- form kode_poli -->
            <div class="form-group">
                <label for="kode_poli">Kode Poli</label>
                <input type="text" class="form-control" id="kode_poli" name="kode_poli">
            </div>
            <!-- akhir form kode_poli -->

            <button type="submit" name="kirim" class="btn btn-success">Tambah</button>
        </form>

    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>