<?php

$database = mysqli_connect("localhost","root", "", "ppdb_kelompok1");

if(mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>