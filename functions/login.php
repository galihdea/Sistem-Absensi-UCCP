<?php
	include 'koneksi.php';
	session_start();

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$login = $conn->query("SELECT * FROM user WHERE (username='$username' OR email='$username') AND password='$password'");
	if($login){
		$hasil = $login->fetch_array();
		// session_start();
		$_SESSION['id_user'] = $hasil['id_user'];
		$_SESSION['id_pegawai'] = $hasil['id_luar'];
		$_SESSION['jenis_user'] = $hasil['status'];
		if($_SESSION['jenis_user']=='Super Admin'){
			$_SESSION['peringatan'] = 'Login sebagai Super Admin';
			header('location:../menu_dashboard.php');
		}
		elseif($_SESSION['jenis_user']=='Admin'){
			$_SESSION['peringatan'] = 'Login sebagai Admin';
			header('location:../menu_dashboard.php');
		}
		elseif($_SESSION['jenis_user']=='Pegawai'){
			$_SESSION['peringatan'] = 'Login sebagai Pegawai';
			header('location:../menu_dashboard.php');
		}
		else{
			$_SESSION['peringatan'] = 'Username atau password salah';
			header('location:../login.php');
		}
	}
	else{
		$_SESSION['peringatan'] = 'Login gagal';
		header('location:../login.php');
	}
?>