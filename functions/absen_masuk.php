<?php
	session_start();
	include 'koneksi.php';
	
	if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip_address=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip_address=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip_address=$_SERVER['REMOTE_ADDR'];
    }
    
	$id_user = $_SESSION['id_user'];
	$id_pegawai = $_SESSION['id_pegawai'];
	$querypegawai = $conn->query("SELECT * FROM user WHERE status='Pegawai' AND id_luar='$id_pegawai'");
	$pegawai = $querypegawai->fetch_array();
	$user_form = $_POST['username'];
	$pass_form = md5($_POST['password']);
	if((($pegawai['username']==$user_form)||($pegawai['email']==$user_form))&&$pegawai['password']==$pass_form){
		$status = "masuk";
		$acc = "Approved";
		$querymasuk = $conn->query("INSERT INTO absensi (id_user,status_absensi,status_acc,ip_address) VALUES ('$id_user','$status','$acc','$ip_address')");
		if($querymasuk){
			$_SESSION['peringatan'] = 'Input absen berhasil';
			header('location:../menu_dashboard.php');
		}
		else{
			$_SESSION['peringatan'] = 'Input absen gagal';
			header('location:../menu_absenkaryawan.php');
		}

	}
	else{
		$_SESSION['peringatan'] = 'Username/email atau password tidak cocok';
		header('location:../menu_absenkaryawan.php');
	}
?>