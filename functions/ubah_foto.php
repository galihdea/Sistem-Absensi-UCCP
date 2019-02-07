<?php
	include 'koneksi.php';

	$id_user = $_GET['id_user'];

	if(getimagesize($_FILES['gambar']['tmp_name'])==FALSE){

	}
	else{
		$upload_image = $_FILES['gambar']['name'];
		$image = $_FILES['gambar']['tmp_name'];
		$image = addslashes(file_get_contents($image));
		$query_simpan = $conn->query("UPDATE user SET gambar='$image',nama_gambar='$upload_image' WHERE id_user='$id_user'");
		if($query_simpan){
			$folder = "images/";
			$target_file = $folder.basename($_FILES['gambar']['name']);
			echo $target_file;
			//move_uploaded_file($image,$target_file);
			$loco = 'location:../form_profile.php?id_user='.$id_user.'';
			header($loco);
		}
	}
?>