<?php

include_once './config.php';

$kode_dokter = $_GET["kode_dokter"];

$sql = mysqli_query($conn, "DELETE FROM `tb-dokter` WHERE kode_dokter = $kode_dokter");

if ($sql) {
    echo "<script>
        alert('Data Berhasil di Hapus!');
        window.location = '../index.php';
        </script>";
} else {
    echo "<script>
        alert('Data gagal di Hapus!');
        window.location = '../index.php';
    </script>";
}
