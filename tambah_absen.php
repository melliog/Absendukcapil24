<?php
require_once '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $detail_keterangan = $_POST['detail_keterangan'];


    $query = $conn->query("INSERT INTO data_absen (nip, nama,  waktu, tanggal, keterangan, detail_keterangan)
    VALUES ('$nip', '$nama', '$waktu', '$tanggal', '$keterangan', '$detail_keterangan')");

    if ($query) {

        $query2 = $conn->query("INSERT INTO data_keterangan ( nip, nama, keterangan)
        VALUES ('$nip', '$nama', '$keterangan')");

        echo "<script> 
        alert('Data berhasil ditambahkan');
        window.location.href='../data_absen_p.php';
        </script>";
    } else {
        echo "<script> 
        alert('Data gagal ditambahkan');
        window.location.href='../data_absen_p.php';
        </script>";
    }

}