<!DOCTYPE HTML>
<html>

<body>
    <?php include 'header.php';
		$id_user = $_GET['id_user'];
		//$querylihat = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
		//$lihat = $querylihat->fetch_array();
	 ?>
    <script src="js/validator.js">
    //script validasi form. Source: http://1000hz.github.io/bootstrap-validator/
    </script>
    <script>
    //Value untuk mengisi Home / ....
    let page_header = "Ubah Pegawai"
    </script>
    <!--custom-widgets-->
    <h3 class="inner-tittle two">Contoh Form Ubah Foto Profile</h3>
    <div class="grid-1">
        <div class="form-body">
            <form method="POST" action="functions/ubah_foto.php?id_pegawai=<?php echo $id_pegawai;?>"
                class="form-horizontal" data-toggle="validator" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Foto baru</label>
                    <div class="col-sm-8">
					<br>
                        <input type="file" name="gambar" id="fileToUpload">
                    </div>
                </div>


                <a href="form_profile.php?id_user=<?php echo $id_user;?>" class="btn blue four bgred tombol-back">Cancel</a>
                <button type="submit" class="btn btn-default" Value="Upload Image" >Upload</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>