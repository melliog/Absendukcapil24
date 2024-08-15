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
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">

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
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.2.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<!-- datatabel -->
<link href="DataTables/datatables.min.css" rel="stylesheet">
   <script src="assets/jquery-3.7.0.js"></script>


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



    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                <div class="card alert rounded-0 border-0 ">
                    <div class="card-body">
                        <div class="text-center">
                        <span class="display-5 fw-bold text-center">ISI DATA ABSEN</span>
                        </div>
                        <hr>
                        <form action="proses/tambah_absen.php" method="post">
                            <div class="mb-2">
                                <label for="nip" class="form-label">Nip</label>
                                <input type="text" name="nip" id="nip" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="waktu" class="form-label">waktu</label>
                                <input type="time" name="waktu" id="waktu" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                            <br>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Keterangan</label>
                        
                                <select name="keterangan" id="keterangan">
                                    <option>HADIR</option>
                                    <option>IZIN</option>
                                    <option>SAKIT</option>
                                    <option>JADWAL LIBUR</option>
                                    <option>LIBUR KHUSUS</option>

                                </select>                            
                            </div>
                            <div class="mb-2">
                                <label for="detail_keterangan" class="form-label">Detail Permohonan</label>
                                <input type="text" name="detail_keterangan" id="detail_keterangan" class="form-control">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-sm btn-success" type="submit" name="submit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                <div class="card alert rounded-0 border-0 ">
                    <div class="card-body">
                        <div class="text-center">
                        <span class="display-5 fw-bold text-center">ISI DATA ABSEN</span>
                        </div>
                        <hr>
                        <form action="proses/tambah_absen_pulang.php" method="post">
                            <div class="mb-2">
                                <label for="nip" class="form-label">Nip</label>
                                <input type="text" name="nip" id="nip" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="waktu" class="form-label">waktu</label>
                                <input type="time" name="waktu" id="waktu" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                            <br>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Keterangan</label>
                        
                                <select name="keterangan" id="keterangan">
                                    <option>HADIR</option>
                                    <option>IZIN</option>
                                    <option>SAKIT</option>
                                    <option>JADWAL LIBUR</option>
                                    <option>LIBUR KHUSUS</option>

                                </select>                            
                            </div>
                            <div class="mb-2">
                                <label for="nama" class="form-label">Detail Permohonan</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-sm btn-success" type="submit" name="submit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>

    

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/bootstrap-5.2.3/js/bootstrap.bundle.min.js"></script>
   <script src="assets/DataTables/datatables.min.js"></script>
   <!-- datatabel -->
   <script src="DataTables/datatables.min.js"></script>
   <script>
      	
let table = new DataTable('#myTable');
   </script>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>