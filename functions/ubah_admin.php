<?php
	include 'koneksi.php';

	$id_admin = $_GET['id_admin'];
	$nama = $_POST['namaadmin'];
	$queryubahadmin = $conn->query("UPDATE admin SET nama_admin='$nama' WHERE id_admin='$id_admin'");
	if($queryubahadmin){
		header('location:../menu_kelolaadmin.php');
	}
	else{
		header('location:../menu_kelolaadmin.php');
	}
	
?>