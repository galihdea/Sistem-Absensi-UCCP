<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$login = $conn->query("SELECT * FROM user WHERE (username='$username' OR email='$username') AND password='$password'");
	if($login){
		$hasil = $login->fetch_array();
		session_start();
		$_SESSION['id_user'] = $hasil['id_user'];
		$_SESSION['id_pegawai'] = $hasil['id_luar'];
		$_SESSION['jenis_user'] = $hasil['status'];
		if($_SESSION['jenis_user']=='Super Admin'){
			header('location:../menu_dashboard.php');
		}
		elseif($_SESSION['jenis_user']=='Admin'){
			header('location:../menu_dashboard.php');
		}
		elseif($_SESSION['jenis_user']=='Pegawai'){
			header('location:../menu_dashboard.php');
		}
		else{
			header('location:../login.php');
		}
	}
	else{
		header('location:../login.php');
	}
?>