<!DOCTYPE HTML>
<html>
<body>
    <script src="js/validator.js">//script validasi form. Source: http://1000hz.github.io/bootstrap-validator/</script>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Tambah Admin"
    </script>
	<!--custom-widgets-->
	<div class="modal fade" id="modalTambah">
		<h3 class="inner-tittle two">Contoh Form Tambah Admin</h3>
		<div class="grid-1">
			<div class="form-body margin-form">
				<form method="POST" action="functions/tambah_admin.php" class="form-horizontal" data-toggle="validator" role="form">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Username Admin</label>
						<div class="col-sm-10">
							<input name="username" type="text" class="form-control1" id="inputName" placeholder="Username" required>
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Password Admin</label>
						<div class="col-sm-10">
							<input name="password" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                            <div class="help-block">Minimum of 6 characters</div>
                        </div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Nama Admin</label>
						<div class="col-sm-10">
							<input name="namaadmin" type="text" class="form-control1" id="inputName" placeholder="Nama" required>
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label ratakiri">Status Admin</label>
						<div class="col-sm-10">
							<select name="statusadmin" id="selector1" class="form-control1" required>
								<option value="Super Admin">Super Admin</option>
								<option value="Admin">Admin</option>
							</select>
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