<?php
	include 'koneksi.php';

	$id_admin = $_GET['id_admin'];
	$queryhapusadmin = $conn->query("DELETE FROM admin WHERE id_admin='$id_admin'");
	if($queryhapusadmin){
		$queryhapususeradmin = $conn->query("DELETE FROM user WHERE status='Admin' AND id_luar='$id_admin'");
		if($queryhapususeradmin){
			header('location:../menu_kelolaadmin.php');
		}
		else{
			header('location:../menu_kelolaadmin.php');
		}
	}
	else{
		header('location:../menu_kelolaadmin.php');
	}
?>