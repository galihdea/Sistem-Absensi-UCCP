<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Tambah Admin</h3>
		<div class="grid-1">
			<div class="form-body">
				<form method="POST" action="functions/tambah_admin.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Username Admin</label>
						<div class="col-sm-8">
							<input name="username" type="text" class="form-control1" id="focusedinput" placeholder="Username">
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Password Admin</label>
						<div class="col-sm-8">
							<input name="password" type="password" class="form-control" id="focusedinput" placeholder="Password"> 
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nama Admin</label>
						<div class="col-sm-8">
							<input name="namaadmin" type="text" class="form-control1" id="focusedinput" placeholder="Nama">
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Status Admin</label>
						<div class="col-sm-8">
							<select name="statusadmin" id="selector1" class="form-control1">
								<option value="Super Admin">Super Admin</option>
								<option value="Admin">Admin</option>
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>