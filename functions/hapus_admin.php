<?php
	include 'koneksi.php';

	session_start();
	$id_admin = $_GET['id_admin'];
	/*$queryambiladmin = $conn->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
	$ambiladmin = $queryambiladmin->fetch_array();
	$nama = $ambiladmin['nama_admin'];*/
	$queryhapusadmin = $conn->query("DELETE FROM admin WHERE id_admin='$id_admin'");
	if($queryhapusadmin){
		$queryhapususeradmin = $conn->query("DELETE FROM user WHERE status='Admin' AND id_luar='$id_admin'");
		if($queryhapususeradmin){
			$_SESSION['peringatan'] = 'Hapus admin berhasil';
			header('location:../menu_kelolaadmin.php');
		}
		else{
			$_SESSION['peringatan'] = 'Hapus user admin gagal';
			header('location:../menu_kelolaadmin.php');
		}
	}
	else{
		$_SESSION['peringatan'] = 'Hapus data admin gagal';
		header('location:../menu_kelolaadmin.php');
	}
?>