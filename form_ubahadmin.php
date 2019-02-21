<!DOCTYPE HTML>
<html>
<body>
	<?php
		$id_admin = $id_luar;
		$querylihat = $conn->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
		$lihat = $querylihat->fetch_array();
		$querylihat2 = $conn->query("SELECT * FROM user WHERE status='Admin' AND id_luar='$id_admin'");
		$lihat2 = $querylihat2->fetch_array();
	?>
    <script src="js/validator.js">//script validasi form. Source: http://1000hz.github.io/bootstrap-validator/</script>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Ubah Admin"
    </script>
	<!--custom-widgets-->
	<div class="modal fade" id="modalUbah<?php echo $id_luar;?>">
	<div class="col-sm-2"></div>
	<div class="col-sm-9">
		<div class="grid-1">
		<h3 class="inner-tittle two"> Form Ubah Admin</h3><hr>
			<div class="form-body margin-form">
				<form method="POST" action="functions/ubah_admin.php?id_admin=<?php echo $id_admin;?>" class="form-horizontal" data-toggle="validator" role="form">
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control1"  data-error="Maaf, format email tidak sesuai." placeholder="Email" value="<?php echo $lihat2['email'];?>" required>
                            <div class="help-block with-errors" style="color: #a94442 !important;"></div>
                        </div>
                    </div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Username Admin</label>
						<div class="col-sm-10">
							<input name="username" type="text" class="form-control1 bgdisable" id="focusedinput" placeholder="Username" value="<?php echo $lihat['user_admin'];?>" disabled="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri konten-modal">Nama Admin</label>
						<div class="col-sm-10">
							<input name="namaadmin" type="text" class="form-control1" id="inputName" placeholder="Nama" value="<?php echo $lihat['nama_admin'];?>" required>
						</div>
					</div>
					<div  align="right">
                        <a data-dismiss="modal" class="btn blue four bgred tombol-back">Cancel</a>
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>