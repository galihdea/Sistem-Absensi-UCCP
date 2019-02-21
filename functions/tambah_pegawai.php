<?php
	include 'koneksi.php';

	session_start();
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['namapegawai'];
	$divisi = $_POST['divisipegawai'];
	$status = $_POST['statuspegawai'];
	if(empty($email)||empty($username)||empty($password)||empty($nama)){
		$_SESSION['peringatan'] = 'Form masih kosong';
		header('location:../form_tambahpegawai.php');
	}
	else{
		$tambahpegawai = "INSERT INTO pegawai (user_pegawai,nama_pegawai,divisi_pegawai,jabatan_pegawai) VALUES ('$username','$nama','$divisi','$status')";
		$querytambah = $conn->query($tambahpegawai);
		if($querytambah){
			$cek = "SELECT * FROM pegawai WHERE user_pegawai='$username'";
			$querycek = $conn->query($cek);
			if($querycek){
				$hasil = $querycek->fetch_array();
				$id_pegawai = $hasil['id_pegawai'];
				$querytambahuser = $conn->query("INSERT INTO user (email,username,password,status,id_luar) VALUES ('$email','$username','$password','Pegawai','$id_pegawai')");
				if($querytambahuser){
					$_SESSION['peringatan'] = 'Tambah pegawai berhasil';
					header('location:../menu_kelolapegawai.php');
				}
				else{
					$_SESSION['peringatan'] = 'Tambah pegawai gagal';
					header('location:../form_tambahpegawai.php');
				}
			}
			else{
				header('location../form_tambahpegawai.php');
			}
		}
		else{
			header('location../form_tambahpegawai.php');
		}
	}
?>