<?php
	include 'koneksi.php';

	$status = $_GET['status'];
	$id_absensi = $_GET['id_absensi'];

	$ubahstatus = $conn->query("UPDATE absensi SET status_acc='$status' WHERE id_absensi='$id_absensi'");
	$ubahstatus2 = $conn->query("UPDATE absensi SET dibaca='dibaca' WHERE id_absensi='$id_absensi'");

	if($ubahstatus){
		header('location:../menu_cuti.php');
	}
	else{
		header('location:../menu_cuti.php');
	}
?>