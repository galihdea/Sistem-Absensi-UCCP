<?php
	include 'koneksi.php';

	session_start();
	$id_admin = $_GET['id_admin'];
	$nama = $_POST['namaadmin'];
	$email = $_POST['email'];
	$queryubahadmin = $conn->query("UPDATE admin SET nama_admin='$nama' WHERE id_admin='$id_admin'");
	$queryubahuser = $conn->query("UPDATE user SET email='$email'  WHERE id_luar='$id_admin' AND status='Admin' ");
	if($queryubahadmin){
		$_SESSION['peringatan'] = 'Ubah data admin berhasil';
		header('location:../menu_kelolaadmin.php');
	}
	else{
		$_SESSION['peringatan'] = 'Ubah data admin gagal';
		header('location:../menu_kelolaadmin.php');
	}
	
?>