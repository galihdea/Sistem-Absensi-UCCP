<?php
	include 'koneksi.php';

	$id_pegawai = $_GET['id_pegawai'];
	$queryhapuspegawai = $conn->query("DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
	if($queryhapuspegawai){
		$queryhapususerpegawai = $conn->query("DELETE FROM user WHERE status='Pegawai' AND id_luar='$id_pegawai'");
		if($queryhapususerpegawai){
			header('location:../menu_kelolapegawai.php');
		}
		else{
			header('location:../menu_kelolapegawai.php');
		}
	}
	else{
		header('location:../menu_kelolapegawai.php');
	}
?>