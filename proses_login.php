<?php 
require_once 'koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_data = $conn->query("SELECT * FROM username WHERE username ='$username' AND password ='$password'");
    $result = mysqli_num_rows($cek_data);
    $data = mysqli_fetch_assoc($cek_data);

    if ($result > 0) {
        session_start();
        $_SESSION['username'] = $data['username'] ;
        
        echo "<script>
        alert('Selamat datang di Aplikasi DISDUKCAPIL! ');
        window.location.href='index_p.php';
        </script>";
    } else {
        echo "<script>
        alert('Username dan Password tidak sesuai!');
        window.location.href='login.php';
        </script>";
    }
}