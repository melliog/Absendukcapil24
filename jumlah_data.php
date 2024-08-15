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
                    <a href="data_absen_p.php">
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
                    <a href="data_pindah.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data keterangan</span>
                    </a>
                </li>

                <li>
                    <a href="tentang.php">
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

#center2 {
            justify-content: center;
}

        #tengah {
            display: block;
    margin-left: auto;
    margin-right: auto;
        }
    
        

        </style>
    </head>
    <body>
        
    </body>
    <body>



    <main class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="card alert alert-primary rounded-0 border-0 border-start border-3 border-primary">
                    <div class="card-body">
                        <span class="display-5 fw-bold">DISDUKCAPIL</span>
                        <hr>
                        <h3>REKAP DATA</h3>
                        <h5></h5>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>   

                    </main>   
    <div class="container mt-4">
    <div class="row">
        <div id="center2" class="col-lg-12">
            <h3 class="fw-bold" style="color:dark;"></h3>
            <hr>
            <div class="row gap-lg-0 gap-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 border-start border-4 border-primary rounded-0 shadow-sm">
                    <div class="card-body">
                    <ion-icon name="document-text-outline"></ion-icon>   
                    <span class="text-primary fs-3 fw-bold"><?= hitungdata('data_kk') ?></span><br>
                    <small class="text-muted">Data Karyawan</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 border-start border-4 border-primary rounded-0 shadow-sm">
                    <div class="card-body">
                        <ion-icon name="documents-outline"></ion-icon> 
                        <span class="text-primary fs-3 fw-bold"><?= hitungdata('data_akta_kelahiran') ?></span><br>
                        <small class="text-muted">Data Absen</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 border-start border-4 border-primary rounded-0 shadow-sm">
                    <div class="card-body">
                        <ion-icon name="documents-outline"></ion-icon> 
                        <span class="text-primary fs-3 fw-bold"><?= hitungdata('data_akta_kelahiran') ?></span><br>
                        <small class="text-muted">Data Keterangan</small>
                    </div>
                </div>
            </div>
        
</body>
</html>    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>