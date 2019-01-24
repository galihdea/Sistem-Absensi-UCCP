<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Reset Password"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Reset Password</h3>
		<div class="grid-1">
			<div class="form-body">
				<form method="POST" action="functions/reset_password.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Username Pegawai</label>
						<div class="col-sm-8">
							<input name="username" type="text" class="form-control1" id="focusedinput" placeholder="Username" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nama Pegawai</label>
						<div class="col-sm-8">
							<input name="namapegawai" type="text" class="form-control1" id="focusedinput" placeholder="Nama" disabled>
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Password Lama</label>
						<div class="col-sm-8">
							<input name="password" type="password" class="form-control" id="focusedinput" placeholder="Password Lama" required> 
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Password Baru</label>
						<div class="col-sm-8">
							<input name="password" type="password" class="form-control" id="focusedinput" placeholder="Retype Password Baru" required> 
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Retype Password</label>
						<div class="col-sm-8">
							<input name="password" type="password" class="form-control" id="focusedinput" placeholder="Retype Password" required> 
						</div>
					</div>
                    <a href="menu_dashboard.php" class="btn blue four bgred tombol-back">Cancel</a>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>