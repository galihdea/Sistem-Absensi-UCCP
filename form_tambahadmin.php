<!DOCTYPE HTML>
<html>
<body>
<?php include 'header.php'; 
	if ($_SESSION['jenis_user'] == "Super Admin"){
?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Tambah Admin"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Tambah Admin</h3>
		<div class="grid-1">
			<div class="form-body margin-form">
				<form method="POST" action="functions/tambah_admin.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Username Admin</label>
						<div class="col-sm-10">
							<input name="username" type="text" class="form-control1" id="focusedinput" placeholder="Username" required>
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Password Admin</label>
						<div class="col-sm-10">
							<input name="password" type="password" class="form-control" id="focusedinput" placeholder="Password" required> 
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Nama Admin</label>
						<div class="col-sm-10">
							<input name="namaadmin" type="text" class="form-control1" id="focusedinput" placeholder="Nama" required>
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
						<a href="menu_kelolaadmin.php" class="btn blue four bgred tombol-back">Cancel</a>
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div>
<?php } include 'footer.php'; ?>
</body>
</html>