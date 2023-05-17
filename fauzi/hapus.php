<?php

include('koneksimysql.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM customer WHERE id = '$id'";

if($connection->query($query)) {
    header("location: data.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>