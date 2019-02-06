<?php
	include 'koneksi.php';

	function simpanGambar($id_user,$image){
		$query_simpan = $conn->query("UPDATE user SET gambar='$image' WHERE id_user='$id_user'");
		if($query_simpan){
			$loco = 'location:../form_profile.php?id_user='.$id_user.'';
			header($loco);
		}
	}

	$id_user = $_GET['id_user'];

	if(getimagesize($_FILES['gambar']['tmp_name'])==FALSE){

	}
	else{
		$image = $_FILES['gambar']['tmp_name'];
		$image = addslashes(file_get_contents($image));
		simpanGambar($id_user,$image);
	}
?>