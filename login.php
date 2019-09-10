<?php
session_start();

include "lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$jml_data = mysqli_num_rows($query);


if($jml_data==1){
$_SESSION['username']=$data['username'];
$_SESSION['level']=$data['level'];
header('Location: home.php?menu=home');
} else {
header('Location: index.php');
}




?>