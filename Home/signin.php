<?php

session_start();
include '../database/database.php';

$name = $_POST['name'];
$password = $_POST['password'];

$data = mysqli_query($database, "SELECT * from user where name='$name' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['name'] = $name;
    $_SESSION['status'] = 'login';

    header('location:index.php');
}else{
    header('location:login.php?pesan=gagal');
}

?>