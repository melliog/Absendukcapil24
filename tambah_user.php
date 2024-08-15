<?php
require_once '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password_u = $_POST['password_u'];


    $query = $conn->query("INSERT INTO data_user (username, password_u)
    VALUES ('$username', '$password_u')");

    if ($query) {
        echo "<script> 
        alert('Data berhasil ditambahkan');
        window.location.href='../data_user.php';
        </script>";
    } else {
        echo "<script> 
        alert('Data gagal ditambahkan');
        window.location.href='../data_user.php';
        </script>";
    }

}