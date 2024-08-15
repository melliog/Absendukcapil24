<?php
require_once '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $detail_keterangan = $_POST['detail_keterangan'];

    $query = $conn->query("UPDATE data_absen SET nip = '$nip', 
    nama = '$nama', waktu = '$waktu', tanggal = '$tanggal', keterangan = '$keterangan', detail_keterangan = '$detail_keterangan' WHERE id = '$id'");

    if ($query) {
        echo "<script> 
        alert('Data berhasil diedit:)');
        window.location.href='../data_absen.php';
        </script>";
    } else {
        echo "<script> 
        alert('Data gagal diedit:(');
        window.location.href='../data_absen.php';
        </script>";
    }

}