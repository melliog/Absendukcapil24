<?php 
include 'koneksi/koneksi.php';
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">

    <title>DISDUKCAPIL</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container-fluid">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                    <img src="assets/imgs/baru.png"  alt=""  width="180px" >
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="data_karyawan.php">
                        <span class="icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Data Karyawan</span>
                    </a>
                </li>


                <li>
                    <a href="data_user.php">
                        <span class="icon">
                            <ion-icon name="file-tray-stacked-outline"></ion-icon>
                        </span>
                        <span class="title">Data User</span>
                    </a>
                </li>

                <li>
                    <a href="data_jabatan.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data Jabatan </span>
                    </a>
                </li>

                <li>
                    <a href="data_absen.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data Absen Datang</span>
                    </a>
                </li>

                <li>
                    <a href="data_absen_pulang.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data Absen Pulang</span>
                    </a>
                </li>


                <li>
                    <a href="data_keterangan.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data keterangan</span>
                    </a>
                </li>

                <li>
                    <a href="tentang_a.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Tentang Kami</span>
                    </a>
                </li>


</div>


        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

            

                <a href="logout.php">
                <div class="btn btn-outline-dark float-end">Logout
                </div>
                </a>
            </div>

            <!-- ======================= Cards ================== -->


            <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">

    <script defer src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap -->
    <title>KEPEGAWAIAN</title>

    <style>
      /* Import Font */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');


        * {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;
        }


        #klik:after {
            background-color: gold;
            color: white;
        }


        #klik:hover {
            background-color: gold;
            color: white;
        }

        #gambar {
            width: 100px;
            display: block;
    margin-left: auto;
    margin-right: auto;
            
            
}

        #center {
            display: flex;
            justify-content: center;
            justify-content: space-around;
}

        #tengah {
            display: block;
    margin-left: auto;
    margin-right: auto;
        }
    
        #rata{
        text-align: center;
        } 

        </style>
    </head>
    <body>
        
    </body>

    <body>
            <!-- ======================= Cards ================== -->

        

    <main class="mt-2" >
      <div class="container-fluid">
         <div class="row">
         <div class="col-12">
               <div class=" alert alert-primary ">
                  <div class="card-body">
                     <span class="fw-bold">USER</span>
                  </div>
               </div>
         </div>
            <hr>
            <div style="overflow-x:auto;">

                  <table id="myTable" class="table table-bordered table-stiped alert-primary" >
                  <thead  class="alert alert-primary" class="text-justify">
                  <tr id="rata">
                                    <th>No.</th>
                                    <th>Nip</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>

                                        <th>Aksi</th>

                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            <!-- <?php $nama = $conn->query("SELECT * FROM data_jabatan") ?> -->
                            <?php foreach($nama as $data) :   
    ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nip'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jabatan'] ?></td>

                <td>
                <a class="btn btn-sm btn-danger text-white" href="proses/hapus_data_jabatan.php?id=<?= $data['id'] ?>">Hapus</a>
                </td>

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
                    </div>
            </div>
        </div>
        </div>
    </main>

    
    
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/DataTables/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        let table = $('#dataTable').DataTable({
            pageLength: 5,
            lengthMenu: [
            [5, 10, 20, -1],
            [5, 10, 20, 'All']
            ]
        });
    });

</script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>