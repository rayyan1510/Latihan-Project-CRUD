<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Apotek</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
</head>

<body>

    <center>
        <h1>Selamat Datang</h1>
        <br>
        <h3>Tabel Dokter</h3>
    </center>


    <div class="container">
        <a href="./assets/tambah.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
        <br><br>
        <table class="table table-sm" align="center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">KODE DOKTER</th>
                    <th scope="col">NAMA DOKTER</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">TELEPON</th>
                    <th scope="col">SPESIALIS</th>
                    <th scope="col">ID POLI</th>
                    <th scope="col" colspan="2">AKSI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php

                    include "./assets/config.php";
                    $sql = "SELECT * FROM `tb-dokter`";

                    $result = mysqli_query($conn, $sql);
                    ?>

                    <?php while ($hasil = mysqli_fetch_assoc($result)) : ?>
                        <td><?= $hasil['kode_dokter']; ?></td>
                        <td><?= $hasil['nama_dokter']; ?></td>
                        <td><?= $hasil['alamat']; ?></td>
                        <td><?= $hasil['telepon']; ?></td>
                        <td><?= $hasil['spesialis']; ?></td>
                        <td><?= $hasil['kode_poli']; ?></td>
                        <td>
                            <a href="./assets/ubah.php?kode_dokter=$hasil['kode_dokter']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                            <a href="./assets/hapus.php?kode_dokter=<?= $hasil['kode_dokter']; ?>" onclick="confirm('Yakin Mau Hapus Data?')" class="btn btn-danger">
                                Hapus
                            </a>
                        </td>
                    <?php endwhile; ?>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="./assets/js/script.js"></script>
</body>

</html>