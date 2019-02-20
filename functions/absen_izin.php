<?php

    //fungsi tanggal_indo dipindahkan ke file /functions/convert_tanggal.php , karena di php gabisa import specific function dari file php
    include 'convert_tanggal.php';

    //echo tanggal_indo('2016-03-20'); // 20 Maret 2016
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
		$cek = 'benar';
		$acc = "Approved";
        $filename = $_FILES['fileToUpload']['name'];
        $extension= strtolower(substr(strrchr($filename, '.'), 1));
        $upload_image = $id_user .".".$extension;
        $image = $_FILES['fileToUpload']['tmp_name'];
        $image = addslashes(file_get_contents($image));

        $target_dir = "attachments/";
        $target_file = $target_dir . $upload_image;
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        /*if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }*/
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $msg = "Sorry, your file is too large.";
            echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } elseif ($uploadOk == 1) {
            try {
                $keterangan = $upload_image;
                //$query_simpan = $conn->query("UPDATE absensi SET keterangan='$upload_image' WHERE id_user='$id_user'");
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            }

            //catch exception
            catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
        }
	}
	elseif($izin=='izin'){
		$cek = 'benar';
		$keterangan = $_POST['keterangan_izin'];
		$acc = "Pending";
	}
	elseif($izin=='cuti'){
		$tanggal_cuti_awal = tanggal_indo($_POST['keterangan_cuti_awal']);
		$tanggal_cuti_akhir = tanggal_indo($_POST['keterangan_cuti_akhir']);
		$cuti_awal = strtotime($_POST['keterangan_cuti_awal']);
		$cuti_akhir = strtotime($_POST['keterangan_cuti_akhir']);
		$sekarang = strtotime("now");
		if(($cuti_akhir-$cuti_awal)<0){
			header('location:../menu_absencuti.php');
			$cek = 'salah';
		}
		elseif(($cuti_awal-$sekarang)<=0-86400){
			header('location:../menu_absencuti.php');
			$cek = 'salah';
		}
		else{
			$cek = 'benar';
		}
		$keterangan_cuti = $_POST['keterangan_cuti_ket'];
		$keterangan = $keterangan_cuti." (".$tanggal_cuti_awal." - ".$tanggal_cuti_akhir." )";
		$acc = "Pending";
	}
	$querycekizinhariini = $conn->query("SELECT * FROM absensi WHERE id_user='$id_user' AND DATE(tanggal)=CURDATE() AND status_acc='Approved' AND (status_absensi=='izin' OR status_absensi='sakit' OR status_absensi='masuk')");
	if(mysqli_num_rows($querycekizinhariini)>0&&(($izin=='izin')||($izin=='sakit'))){
		header('location:../menu_absenizin.php');
	}
	if($cek=='benar'){
		$queryizin = $conn->query("INSERT INTO absensi (id_user,status_absensi,status_acc,keterangan,ip_address,dibaca) VALUES ('$id_user','$izin','$acc','$keterangan','$ip_address','$dibaca')");

		if($queryizin){
			header('location:../menu_dashboard.php');
		}
	}
	elseif($cek=='salah'){
		if($izin=='cuti'){
			header('location:../menu_absencuti.php');
		}
		else{
			header('location:../menu_absenizin.php');
		}	
	}
	
?>