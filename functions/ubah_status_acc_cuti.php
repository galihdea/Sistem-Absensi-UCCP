<?php
	include 'koneksi.php';

	session_start();
	$status = $_GET['status'];
	$id_absensi = $_GET['id_absensi'];

	$ubahstatus = $conn->query("UPDATE absensi SET status_acc='$status' WHERE id_absensi='$id_absensi'");
	$ubahstatus2 = $conn->query("UPDATE absensi SET dibaca='dibaca' WHERE id_absensi='$id_absensi'");

	if($ubahstatus){
		$_SESSION['peringatan'] = 'Ubah status cuti berhasil';
		header('location:../menu_cuti.php');
	}
	else{
		$_SESSION['peringatan'] = 'Ubah status cuti gagal';
		header('location:../menu_cuti.php');
	}
?>