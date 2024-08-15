<?php 
$conn = mysqli_connect("localhost", "root", "", "db_absen_dukcapil");

//function

function hitungdata($tabelnama)
{
    global $conn;

    $query = $conn->query("SELECT * FROM $tabelnama");
    $totalcount = mysqli_num_rows($query);
    return $totalcount;
}