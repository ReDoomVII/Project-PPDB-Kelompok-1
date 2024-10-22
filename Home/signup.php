<?php
var_dump('masuk');

include "../Database/database.php";

$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE name='$name'";
$result = $database->query($sql);
if ($result->num_rows>0){
    header('location:login.php?pesan=notregister');
}else{
    $sql = "INSERT INTO user (name, password) VALUES ('$name', '$password')";
    
    if($database->query($sql) === TRUE){
        header('location:login.php?pesan=register');
    }else{
        echo "Error: ". $sql . "<br>" . $database->error;
    }
}