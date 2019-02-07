<!DOCTYPE HTML>
<html>
<body>
	<?php
		$id_admin = $id_luar;
		$querylihat = $conn->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
		$lihat = $querylihat->fetch_array();
	?>
    <script src="js/validator.js">//script validasi form. Source: http://1000hz.github.io/bootstrap-validator/</script>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Ubah Admin"
    </script>
	<!--custom-widgets-->
	<div class="modal fade" id="modalUbah<?php echo $id_luar;?>">
		<h3 class="inner-tittle two">Contoh Form Ubah Admin</h3>
		<div class="grid-1">
			<div class="form-body margin-form">
				<form method="POST" action="functions/ubah_admin.php?id_admin=<?php echo $id_admin;?>" class="form-horizontal" data-toggle="validator" role="form">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Username Admin</label>
						<div class="col-sm-10">
							<input name="username" type="text" class="form-control1" id="focusedinput" placeholder="Username" value="<?php echo $lihat['user_admin'];?>" disabled="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Nama Admin</label>
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
</body>
</html>