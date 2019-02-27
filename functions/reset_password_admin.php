<?php
	include 'koneksi.php';
	session_start();
	$id_user = $_GET['id_user'];
	$cekuser = $conn->query("SELECT * FROM user WHERE id_user='$id_user'");
	$user = $cekuser->fetch_array();
	$username = $user['username'];
	$passbaru = md5($username);
	$queryubahpass = $conn->query("UPDATE user SET password='$passbaru' WHERE id_user='$id_user'");
	if($queryubahpass){
		$_SESSION['peringatan'] = 'Reset password admin berhasil';
	}
	else{
		$_SESSION['peringatan'] = 'Reset password admin gagal';
	}
	header('location:../menu_kelolaadmin.php');
?>