    <?php
require_once '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $id_karyawan = $_POST['id_karyawan'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $status_kepegawaian = $_POST['status_kepegawaian'];
    $lama_kontrak = $_POST['lama_kontrak'];

    $query = $conn->query("UPDATE data_karyawan SET nip = '$nip', 
    nama = '$nama', jenis_kelamin = '$jenis_kelamin', agama = '$agama', jabatan = '$jabatan', pendidikan = '$pendidikan', status_kepegawaian = '$status_kepegawaian', lama_kontrak = '$lama_kontrak' WHERE id_karyawan = '$id_karyawan'");

    if ($query) {
        echo "<script> 
        alert('Data berhasil diedit:)');
        window.location.href='../data_karyawan.php';
        </script>";
    } else {
        echo "<script> 
        alert('Data gagal diedit:(');
        window.location.href='../data_karyawan.php';
        </script>";
    }

}