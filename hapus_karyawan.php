<?php
require_once '../koneksi/koneksi.php';
if (isset($_GET['id_karyawan'])) {
    $id_karyawan = $_GET['id_karyawan'];


$query = $conn->query("DELETE FROM data_karyawan WHERE id_karyawan = '$id_karyawan'");

    if ($query) {
        echo "<script> 
        alert('Data Berhasil Dihapus?');
        window.location.href='../data_karyawan.php';
        </script>";
    } else {
        echo "<script> 
        alert('Gagal Menghapus Data!');
        window.location.href='../data_karyawan.php';
        </script>";
    }
}