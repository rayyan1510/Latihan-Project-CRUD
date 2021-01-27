<?php

// pamggil koneksi
include './config.php';

$kode_dokter = $_GET['kode_dokter'];
$data = mysqli_query($conn, "SELECT * FROM `tb-dokter` WHERE kode_dokter = '$kode_dokter'");

$result = mysqli_fetch_assoc($data);
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

            <!-- form kode dokter -->
            <input type="hidden" name="kode_dokter" value="<?= $result['kode_dokter']; ?>">
            <!-- akhir kode form -->

            <!-- form nama -->
            <div class="form-group">
                <label for="nama">Nama Dokter</label>
                <input type="text" class="form-control" id="nama" name="nama_dokter" value="<?= $result['nama_dokter']; ?>">
            </div>
            <!-- akhir form nama -->

            <!-- form alamat -->
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $result['alamat']; ?>">
            </div>
            <!-- akhir form alamat -->

            <!-- form telepon -->
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $result['telepon']; ?>">
            </div>
            <!-- akhir form telepon -->

            <!-- form spesialis -->
            <div class="form-group">
                <label for="spesialis">Speasialis</label>
                <input type="text" class="form-control" id="spesialis" name="spesialis" value="<?= $result['spesialis']; ?>">
            </div>
            <!-- akhir form spesialis -->

            <!-- form kode_poli -->
            <div class="form-group">
                <label for="kode_poli">Kode Poli</label>
                <input type="text" class="form-control" id="kode_poli" name="kode_poli" value="<?= $result['kode_poli']; ?>">
            </div>
            <!-- akhir form kode_poli -->

            <button type="submit" name="edit" class="btn btn-secondary">Edit</button>
        </form>
    </div>


    <!-- validasi edit data -->
    <?php

    if (isset($_POST["edit"])) {
        $kode_dokter = $_POST["kode_dokter"];
        $nama_dokter = $_POST["nama_dokter"];
        $alamat = $_POST["alamat"];
        $spesialis = $_POST["spesialis"];
        $kode_poli = $_POST["kode_poli"];

        $sql = mysqli_query($conn, "UPDATE `tb-dokter` SET nama_dokter = '$nama_dokter', alamat = '$alamat', spesialis = '$spesialis', kode_poli = '$kode_poli' WHERE kode_dokter = '$kode_dokter'");

        if ($sql) {
            echo "<script>
                        alert('Data Berhasil Di Update');
                        window.location = '../index.php';
            </script>";
        } else {
            echo "<script>alert('Data Gagal Di Update')</script>";
        }
    }

    ?>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="./assets/js/script.js"></script>
</body>

</html>