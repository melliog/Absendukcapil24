<?php 
require_once '../koneksi/koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>
    alert('Anda belum login!');
    window.location.href='login.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download XLS</title>
</head>

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Data Absen Datang & Pulang.xls");
?>

                    <body>
                        <h4 class="text-center">LAPORAN DATA ABSEN</h4>
                        <table class="table table-hover" >
                        <thead class="text-center">
                        <thead  class="alert alert-primary" class="text-justify">
                  <tr>
                                    <th>No.</th>
                                    <th>Nip</th>
                                    <th>Nama</th>
                                    <th>Waktu</th>
                                    <th>tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Detail Permohonan</th>
                                    <th>Si-Penginput</th>

                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <!-- <?php $nama = $conn->query("SELECT * FROM data_absen") ?> -->
                            <?php foreach($nama as $data) : 

                                                        //Rahasia
                                                        $penginput_data = $data['nama'];

    ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nip'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['waktu'] ?></td>
                <td><?= $data['tanggal'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td><?= $data['detail_keterangan'] ?></td>
                <td><?= $penginput_data ?></td>
                        <?php endforeach ?>

                    </tbody>
                    </table>
</body>

</html>