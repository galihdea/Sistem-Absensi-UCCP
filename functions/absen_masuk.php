<?php
	session_start();
	include 'koneksi.php';
	$id_pegawai = $_SESSION['id_pegawai'];
	$querypegawai = $conn->query("SELECT * FROM user WHERE status='Pegawai' AND id_luar='$id_pegawai'");
	$pegawai = $querypegawai->fetch_array();
	$user_form = $_POST['username'];
	$pass_form = md5($_POST['password']);
	if($pegawai['username']==$user_form&&$pegawai['password']==$pass_form){
		header('location:../menu_dashboard.php');
	}
	else{
		header('location:../menu_absenkaryawan.php');
	}
?>