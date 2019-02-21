<?php
	include 'koneksi.php';
	session_start();
	$id_pegawai = $_GET['id_pegawai'];
	$queryhapuspegawai = $conn->query("DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
	if($queryhapuspegawai){
		$queryhapususerpegawai = $conn->query("DELETE FROM user WHERE status='Pegawai' AND id_luar='$id_pegawai'");
		if($queryhapususerpegawai){
			$_SESSION['peringatan'] = 'Hapus pegawai berhasil';
			header('location:../menu_kelolapegawai.php');
		}
		else{
			$_SESSION['peringatan'] = 'Hapus user pegawai gagal';
			header('location:../menu_kelolapegawai.php');
		}
	}
	else{
		$_SESSION['peringatan'] = 'Hapus data pegawai gagal';
		header('location:../menu_kelolapegawai.php');
	}
?>