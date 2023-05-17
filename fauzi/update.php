<?php

//include koneksi database
include('koneksimysql.php');

//get data dari form
$id      = $_POST['id '];
$Nama         = $_POST['Nama'];
$Minuman = $_POST['Minuman'];
$Makanan       = $_POST['Makanan'];
$Total       = $_POST['Total'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE customer  SET Nama = '$Nama', Minuman = '$Minuman', Makanan = '$Makanan', Total = '$Total' WHERE id  = '$id '";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: data.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>