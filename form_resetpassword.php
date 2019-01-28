<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Reset Password"
    </script>
	<!--custom-widgets-->
	<?php
		$id_user = $_GET['id_user'];
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
		<h3 class="inner-tittle two">Reset Password</h3>
		<div class="grid-1">
			<div class="form-body">
				<form method="POST" action="functions/reset_password.php?id_user=<?php echo $id_user;?>" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-8">
							<input name="username" type="text" class="form-control1" id="focusedinput" placeholder="Username" value="<?php echo $usernama;?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-8">
							<input name="namapegawai" type="text" class="form-control1" id="focusedinput" placeholder="Nama" value="<?php echo $nama;?>" disabled>
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Password Lama</label>
						<div class="col-sm-8">
							<input name="passwordlama" type="password" class="form-control" id="focusedinput" placeholder="Password Lama" required> 
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Password Baru</label>
						<div class="col-sm-8">
							<input name="passwordbaru" type="password" class="form-control" id="focusedinput" placeholder="Password Baru" required> 
						</div>
					</div>
					<div class="form-group"> 
						<label for="focusedinput" class="col-sm-2 control-label">Retype Password</label>
						<div class="col-sm-8">
							<input name="passwordbaruconfirm" type="password" class="form-control" id="focusedinput" placeholder="Retype Password Baru" required> 
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