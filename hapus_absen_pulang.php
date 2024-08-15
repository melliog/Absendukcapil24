<?php
require_once '../koneksi/koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];


$query = $conn->query("DELETE FROM data_absen_pulang WHERE id = '$id'");

    if ($query) {
        echo "<script> 
        alert('Hapus Data?');
        window.location.href='../data_absen_pulang.php';
        </script>";
    } else {
        echo "<script> 
        alert('Gagal Menghapus Data!');
        window.location.href='../data_absen_pulang.php';
        </script>";
    }
}