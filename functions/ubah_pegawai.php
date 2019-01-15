<?php
	include 'koneksi.php';

	$id_pegawai = $_POST['id_pegawai'];
	$nama = $_POST['namapegawai'];
	$divisi = $_POST['divisipegawai'];
	$jabatan = $_POST['jabatanpegawai'];
	$queryubahpegawai = $conn->query("UPDATE pegawai SET nama_pegawai='$nama', divisi_pegawai='$divisi', jabatan_pegawai='$jabatan' WHERE id_pegawai='$id_pegawai'");
	if($queryubahpegawai){
		header('location:../menu_kelolapegawai.php');
	}
	else{
		header('location:../menu_kelolapegawai.php');
	}
	
?>