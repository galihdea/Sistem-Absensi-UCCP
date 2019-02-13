<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; 
		 $id_user = $_SESSION['id_user'];
		$querylihat = $conn->query("SELECT * FROM user WHERE id_user='$id_user'");
		$lihat = $querylihat->fetch_array();
		$id_luar = $lihat['id_luar'];
		if($lihat['status']=='Pegawai'){
			$queryambil = "SELECT * FROM pegawai WHERE id_pegawai='$id_luar'";
		} 
		elseif($lihat['status']=='Admin'){
			$queryambil = "SELECT * FROM admin WHERE id_admin='$id_luar'";	
		}
		elseif($lihat['status']=='Super Admin'){
			$queryambil = "SELECT * FROM super_admin WHERE id_sadmin='$id_luar'";	
		}
		$ambilAja = $conn->query($queryambil);
		$ambil = $ambilAja->fetch_array();
	?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Profile"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Profile User</h3>
		<div class="grid-1">
			<div class="form-body">
				<form action="menu_kelolapegawai.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Username</label>
						<label class="col-sm-3 control-label lihat-data" id="user-pegawai"> <?php echo $lihat['username'];?></label>
					</div>
				
				<!-- untuk pegawai -->
				<?php	if($lihat['status']=='Pegawai'){ ?>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Nama</label>
						<label class="col-sm-3 control-label lihat-data" id="nama-pegawai"> <?php echo $ambil['nama_pegawai'];?></label>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label lihat-data">Divisi</label>
						<label class="col-sm-3 control-label lihat-data" id="div-pegawai"> <?php echo $ambil['divisi_pegawai'];?> </label>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label lihat-data">Jabatan</label>
						<label class="col-sm-3 control-label lihat-data" id="stat-pegawai"> <?php echo $ambil['jabatan_pegawai'];?> </label>
					</div>
				<?php	} ?>

					<!-- untuk admin -->
				<?php	if($lihat['status']=='Admin'){ ?>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Nama</label>
						<label class="col-sm-3 control-label lihat-data" id="nama-pegawai"> <?php echo $ambil['nama_admin'];?> </label>
					</div>
				<?php	} ?>
				<?php	if($lihat['status']=='Super Admin'){ ?>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Nama</label>
						<label class="col-sm-3 control-label lihat-data" id="nama-pegawai"> <?php echo $ambil['nama_sadmin'];?> </label>
					</div>
				<?php	} ?>

					<a href="menu_dashboard.php" button type="submit" class="btn btn-default" style="margin-left: 0px !important">Kembali </a>
					<a data-toggle="modal" data-target="#modalFoto" button type="submit" class="btn btn-default">Ubah Foto </a>
					<a data-toggle="modal" data-target="#modalResetPass" button type="submit" class="btn btn-default">Reset Password </a>
					
				</form>
			</div>
		</div>
 <?php include 'form_ubahfotoprofile.php'; ?>
 <?php include 'form_resetpassword.php'; ?>
 <?php include 'footer.php'; ?>
</body>
</html>