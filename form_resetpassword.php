<!DOCTYPE HTML>
<html>
<head>
    <script src="js/validator.js">//script validasi form. Source: http://1000hz.github.io/bootstrap-validator/</script>
</head>
<body>
	<!--custom-widgets-->
	<?php
		$cekuser = $conn->query("SELECT * FROM user WHERE id_user='$id_user'");
		$user = $cekuser->fetch_array();
		$usernama = $user['username'];
		$id_luar = $user['id_luar'];
		if($user['status']=='Pegawai'){
			$ambildata = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_luar'");
			$ambil = $ambildata->fetch_array();
			$nama = $ambil['nama_pegawai'];
		}
		elseif($user['status']=='Admin'){
			$ambildata = $conn->query("SELECT * FROM admin WHERE id_admin='$id_luar'");
			$ambil = $ambildata->fetch_array();
			$nama = $ambil['nama_admin'];
		}
		elseif($user['status']=='Super Admin'){
			$ambildata = $conn->query("SELECT * FROM super_admin WHERE id_sadmin='$id_luar'");
			$ambil = $ambildata->fetch_array();
			$nama = $ambil['nama_sadmin'];
		}
	?>
	<div class="modal fade" id="modalResetPass">
		<div class="col-sm-2"></div>>
		<div class="grid-1 col-sm-9">
			<!-- Modal Header -->
		    <h2 class="header-modal">Reset Password</h2>
			<div class="form-body">
				<form method="POST" action="functions/reset_password.php?id_user=<?php echo $id_user;?>" class="form-horizontal" role="form" data-toggle="validator">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-3 control-label" style="text-align: left !important">Username</label>
						<div class="col-sm-9">
							<input name="username" type="text" class="form-control1 bgdisable" id="focusedinput" placeholder="Username" value="<?php echo $usernama;?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-3 control-label" style="text-align: left !important">Nama</label>
						<div class="col-sm-9">
							<input name="namapegawai" type="text" class="form-control1 bgdisable" id="focusedinput" placeholder="Nama" value="<?php echo $nama;?>" disabled>
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-3 control-label" style="text-align: left !important">Password Lama</label>
						<div class="col-sm-9">
							<input name="passwordlama" type="password" class="form-control" id="focusedinput" placeholder="Password Lama" required>
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-3 control-label" style="text-align: left !important">Password Baru</label>
						<div class="col-sm-9">
							<input name="passwordbaru" type="password" class="form-control" id="inputPassword" placeholder="Password Baru" data-minlength="6" required>
                            <div class="help-block">Minimum of 6 characters</div>
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-3 control-label" style="text-align: left !important">Retype Password</label>
						<div class="col-sm-9">
							<input name="passwordbaruconfirm" type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Retype Password Baru" required>
                            <div class="help-block with-errors"></div>
						</div>
					</div>
                    <div class="form-group" align="right">
	                    <a data-dismiss="modal" class="btn blue four bgred tombol-back">Cancel</a>
						<button type="submit" class="btn blue four bglblue hover">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>