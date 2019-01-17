<?php
	session_start();
	include 'koneksi.php';
	$ip_address = $_SERVER["REMOTE_ADDR"];
	$id_user = $_SESSION['id_user'];
	$id_pegawai = $_SESSION['id_pegawai'];
	$querypegawai = $conn->query("SELECT * FROM user WHERE status='Pegawai' AND id_luar='$id_pegawai'");
	$pegawai = $querypegawai->fetch_array();
	$user_form = $_POST['username'];
	$pass_form = md5($_POST['password']);
	if($pegawai['username']==$user_form&&$pegawai['password']==$pass_form){
		$status = "masuk";
		$acc = "Approved";
		$querymasuk = $conn->query("INSERT INTO absensi (id_user,status_absensi,status_acc,ip_address) VALUES ('$id_user','$status','$acc','$ip_address')");
		if($querymasuk){
			header('location:../menu_dashboard.php');
		}
		else{
			header('location:../menu_absenkaryawan.php');
		}

	}
	else{
		header('location:../menu_absenkaryawan.php');
	}
?>