<?php
session_start();

// include file
include('api/db_config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$phone = $_POST['phone'];
$role = $_POST['role'];
$status = $_POST['status'];

if(empty($name) || empty($email) || empty($password) || empty($phone) || empty($role) || empty($status)){
	die("tidak boleh ada data yang kosong");
}

$selection = mysqli_query($con, "SELECT id FROM users WHERE email = '$email' ");
$rows = mysqli_num_rows($selection);

if($rows == 0){

	$run = mysqli_query($con, "INSERT INTO users(name, email, password, phone, role, status)VALUES ('$name', '$email', '$password', '$phone', '$role', '$status')");
	echo"<script>alert('Registrasi Berhasil!!');history.go(-1);</script>";
	
}else{
	echo"<script>alert('Registrasi Gagal!!');history.go(-1);</script>";
}

function message($identify, $text){
    return '("identify" : '.$identify.', "text" : "'.$text.'")';
}

?>