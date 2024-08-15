<?php
require_once '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $status_kepegawaian = $_POST['status_kepegawaian'];
    $lama_kontrak = $_POST['lama_kontrak'];


    $query = $conn->query("INSERT INTO data_karyawan (nama, nip, jenis_kelamin, agama, jabatan, pendidikan, status_kepegawaian, lama_kontrak)
    VALUES ('$nama', '$nip', '$jenis_kelamin', '$agama', '$jabatan', '$pendidikan', '$status_kepegawaian', '$lama_kontrak')");

    if ($query) {

        $query2 = $conn->query("INSERT INTO data_jabatan (nip, nama, jabatan)
        VALUES ('$nip', '$nama', '$jabatan')");
    


        echo "<script> 
        alert('Data berhasil ditambahkan');
        window.location.href='../data_karyawan_p.php';
        </script>";
    } else {
        echo "<script> 
        alert('Data gagal ditambahkan');
        window.location.href='../data_karyawan_p.php';
        </script>";
    }

}