<?php
	session_start();
	include 'koneksi.php';
	$id_user = $_SESSION['id_user'];
	$ip_address = $_SERVER["REMOTE_ADDR"];

	$izin = $_POST['izin'];
	if($izin=='sakit'){
		$keterangan = $_POST['keterangan_sakit'];
		$acc = "Approved";
	}
	elseif($izin=='izin'){
		$keterangan = $_POST['keterangan_izin'];
		$acc = "Pending";
	}
	elseif($izin=='cuti'){
		$keterangan = $_POST['keterangan_cuti_awal']. " - ".$_POST['keterangan_cuti_akhir'];
		$acc = "Pending";
	}
	$queryizin = $conn->query("INSERT INTO absensi (id_user,status_absensi,status_acc,keterangan,ip_address) VALUES ('$id_user','$izin','$acc','$keterangan','$ip_address')");

	if($queryizin){
		header('location:../menu_dashboard.php');
	}
?>