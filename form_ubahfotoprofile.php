<!DOCTYPE HTML>
<html>

<body>
    <?php
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
    <div class="modal fade" id="modalFoto">
    <h3 class="inner-tittle two">Contoh Form Ubah Foto Profile</h3>
    <div class="grid-1">
        <div class="form-body">
            <form method="POST" action="functions/ubah_foto.php?id_user=<?php echo $id_user;?>"
                class="form-horizontal" data-toggle="validator" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2" style="padding-left: 26px;width: 10.666667%;">Foto baru</label>
                    <div class="col-sm-8">
                        <input type="file" name="gambar" id="fileToUpload" style="background:#FFFFFF;border:1px solid #FFFFFF;color:#000000">
                    </div>
                </div>


                <a href="form_profile.php?id_user=<?php echo $id_user;?>" class="btn blue four bgred tombol-back">Cancel</a>
                <button type="submit" class="btn btn-default" Value="Upload Image" style="margin-left: 21px;">Upload</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>