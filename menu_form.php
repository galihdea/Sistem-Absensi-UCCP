<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Tambah Admin</h3>
		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="focusedinput" placeholder="Password"> 
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
							<option>Super Admin</option>
							<option>Admin</option>
							<option>Pegawai</option>
						</select></div>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>