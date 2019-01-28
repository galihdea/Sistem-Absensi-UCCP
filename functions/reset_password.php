<?php
	include 'koneksi.php';
	$id_user = $_GET['id_user'];
	$passlama = md5($_POST['passwordlama']);
	$cekpass = $conn->query("SELECT * FROM user WHERE id_user='$id_user' AND password='$passlama'");
	$bener = mysqli_num_rows($cekpass);
	//echo $passlama.' '.$bener;
	$lokasi = '';
	if($bener==0){
		$lokasi = 'location:../form_resetpassword.php?id_user='.$id_user;
	}
	elseif($bener==1){
		$passbaru = md5($_POST['passwordbaru']);
		$passconfirm = md5($_POST['passwordbaruconfirm']);
		if($passbaru==$passconfirm){
			$ubahpass = $conn->query("UPDATE user SET password='$passbaru' WHERE id_user='$id_user'");
			if($ubahpass){
				$lokasi = 'location:../menu_dashboard.php';
			}
			else{
				$lokasi = 'location:../form_resetpassword.php?id_user='.$id_user;
			}
		}
		else{
			$lokasi = 'location:../form_resetpassword.php?id_user='.$id_user;
		}
	}
	//echo $lokasi;
	header($lokasi);
?>