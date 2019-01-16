<?php
	session_start();
	include 'koneksi.php';
	$id_pegawai = $_SESSION['id_pegawai'];
	$izin = $_POST['izin'];
	if($izin=='sakit'){
		$keterangan = $_POST['keterangan_sakit'];
	}
	elseif($izin=='izin'){
		$keterangan = $_POST['keterangan_izin'];
	}
	elseif($izin=='cuti'){
		$keterangan = $_POST['keterangan_cuti_awal']. " - ".$_POST['keterangan_cuti_akhir'];
	}
	header('location:../menu_dashboard.php');
?>