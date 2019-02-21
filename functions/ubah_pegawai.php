<?php
	include 'koneksi.php';

	session_start();
	$id_pegawai = $_GET['id_pegawai'];
	$nama = $_POST['namapegawai'];
	$divisi = $_POST['divisipegawai'];
	$jabatan = $_POST['jabatanpegawai'];
	$queryubahpegawai = $conn->query("UPDATE pegawai SET nama_pegawai='$nama', divisi_pegawai='$divisi', jabatan_pegawai='$jabatan' WHERE id_pegawai='$id_pegawai'");
	if($queryubahpegawai){
		$_SESSION['peringatan'] = 'Ubah data pegawai berhasil';
		header('location:../menu_kelolapegawai.php');
	}
	else{
		$_SESSION['peringatan'] = 'Ubah data pegawai gagal';
		header('location:../menu_kelolapegawai.php');
	}
	
?>