<?php

    //fungsi tanggal_indo dipindahkan ke file /functions/convert_tanggal.php , karena di php gabisa import specific function dari file php

    include 'convert_tanggal.php';

    echo tanggal_indo('2016-03-20'); // 20 Maret 2016
	session_start();
	include 'koneksi.php';
	$id_user = $_SESSION['id_user'];
	
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

	$izin = $_POST['izin'];
	$dibaca = 'belum';
	if($izin=='sakit'){
		$keterangan = $_POST['keterangan_sakit'];
		$acc = "Approved";
	}
	elseif($izin=='izin'){
		$keterangan = $_POST['keterangan_izin'];
		$acc = "Pending";
	}
	elseif($izin=='cuti'){
		$tanggal_cuti_awal = tanggal_indo($_POST['keterangan_cuti_awal']);
		$tanggal_cuti_akhir = tanggal_indo($_POST['keterangan_cuti_akhir']);
		$keterangan_cuti = $_POST['keterangan_cuti_ket'];
		$keterangan = $keterangan_cuti." (".$tanggal_cuti_awal." - ".$tanggal_cuti_akhir." )";
		$acc = "Pending";
	}
	$querycekizinhariini = $conn->query("SELECT * FROM absensi WHERE id_user='$id_user' AND DATE(tanggal)=CURDATE() AND status_acc='Approved' AND (status_absensi=='izin' OR status_absensi='sakit' OR status_absensi='masuk')");
	if(mysqli_num_rows($querycekizinhariini)>0&&(($izin=='izin')||($izin=='sakit'))){
		header('location:../menu_absenizin.php');
	}
	$queryizin = $conn->query("INSERT INTO absensi (id_user,status_absensi,status_acc,keterangan,ip_address,dibaca) VALUES ('$id_user','$izin','$acc','$keterangan','$ip_address','$dibaca')");

	if($queryizin){
		header('location:../menu_dashboard.php');
	}
?>