<?php
	include 'koneksi.php';

	session_start();
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['namaadmin'];
	$status = "Admin";
	if(empty($email)||empty($username)||empty($password)||empty($nama)){
		$_SESSION['peringatan'] = 'Form masih kosong';
		header('location:../form_tambahadmin.php');
	}
	else{
		if($status=='Super Admin'){
			$tambahadmin = "INSERT INTO super_admin (user_sadmin,nama_sadmin) VALUES ('$username','$nama')";
		}
		else{
			$tambahadmin = "INSERT INTO admin (user_admin,nama_admin) VALUES ('$username','$nama')";
		}
		$querytambah = $conn->query($tambahadmin);
		if($querytambah){
			if($status=='Super Admin'){
				$cek = "SELECT * FROM super_admin WHERE user_sadmin='$username'";
			}
			else{
				$cek = "SELECT * FROM admin WHERE user_admin='$username'";
			}
			$querycek = $conn->query($cek);
			if($querycek){
				$hasil = $querycek->fetch_array();
				if($status=='Super Admin'){
					$id_adm = $hasil['id_sadmin'];
				}
				else{
					$id_adm = $hasil['id_admin'];
				}
				$querytambahuser = $conn->query("INSERT INTO user (email,username,password,status,id_luar) VALUES ('$email','$username','$password','$status','$id_adm')");
				if($querytambahuser){
					$_SESSION['peringatan'] = 'Tambah admin berhasil';
					header('location:../menu_kelolaadmin.php');
				}
				else{
					$_SESSION['peringatan'] = 'Tambah admin gagal';
					header('location:../form_tambahadmin.php');
				}
			}
			else{
				header('location:../form_tambahadmin.php');
			}
		}
		else{
			header('location../form_tambahadmin.php');
		}
	}
?>