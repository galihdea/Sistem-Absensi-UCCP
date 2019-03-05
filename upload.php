<?php
    include 'functions/koneksi.php';

    session_start();

    $id_user = $_GET['id_user'];    

    $filename = $_FILES['fileToUpload']['name'];
    $extension= strtolower(substr(strrchr($filename, '.'), 1));
    $upload_image = $id_user .".".$extension;
    $image = $_FILES['fileToUpload']['tmp_name'];
    $image = addslashes(file_get_contents($image));

    $target_dir = "uploads/";
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
        //echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        $_SESSION['peringatan'] = 'Ukuran file yang Anda unggah terlalu besar';
        $uploadOk = 0;
        /*$loco = 'location:form_profile.php?id_user='.$id_user.'';
        header($loco);*/
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $_SESSION['peringatan'] = 'File yang Anda unggah bukan file gambar';
        $uploadOk = 0;
        /*$loco = 'location:form_profile.php?id_user='.$id_user.'';
        header($loco);*/
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        $loco = 'location:form_profile.php?id_user='.$id_user.'';
        header($loco);
    // if everything is ok, try to upload file
    } else {
        $query_simpan = $conn->query("UPDATE user SET nama_gambar='$upload_image' WHERE id_user='$id_user'");
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ".basename( $upload_image). " has been uploaded.";
            //move_uploaded_file($image,$target_file);
            $_SESSION['peringatan'] = 'Ubah foto berhasil';
            $loco = 'location:form_profile.php?id_user='.$id_user.'';
            header($loco);

        } else {
            $_SESSION['peringatan'] = 'Ubah foto gagal';
            $loco = 'location:form_profile.php?id_user='.$id_user.'';
            header($loco);
        }
    }
?>