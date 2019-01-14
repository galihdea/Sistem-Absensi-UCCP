<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Tambah Pegawai</h3>
		<div class="grid-1">
			<div class="form-body">
				<form method="POST" action="functions/tambah_pegawai.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Username Pegawai</label>
						<div class="col-sm-8">
							<input name="username" type="text" class="form-control1" id="focusedinput" placeholder="Username">
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Password Pegawai</label>
						<div class="col-sm-8">
							<input name="password" type="password" class="form-control" id="focusedinput" placeholder="Password"> 
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nama Pegawai</label>
						<div class="col-sm-8">
							<input name="namapegawai" type="text" class="form-control1" id="focusedinput" placeholder="Nama">
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Divisi Pegawai</label>
						<div class="col-sm-8">
							<select name="divisipegawai" id="selector1" class="form-control1">
								<option>A</option>
								<option>B</option>
								<option>C</option>
								</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Status Pegawai</label>
						<div class="col-sm-8">
							<select name="statuspegawai" id="selector1" class="form-control1">
								<option>Manager Divisi</option>
								<option>Staf Divisi</option>
								<option>Intern</option>
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