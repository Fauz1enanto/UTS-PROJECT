<?php

//include koneksi database
include('koneksimysql.php');

//get data dari form
$id = $_POST['id'];
$Nama           = $_POST['Nama'];
$Minuman = $_POST['Minuman'];
$Makanan       = $_POST['Makanan'];
$Total = $_POST['Total'];

//query insert data ke dalam database
$query = "INSERT INTO customer (id, Nama, Minuman, Makanan, Total) VALUES ('$id', '$Nama', '$Minuman', '$Makanan', '$Total')";

//kondisi 
if($connection->query($query)) {

    //redirect ke halaman data.php 
    header("location: data.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>