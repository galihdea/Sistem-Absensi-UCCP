<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/ok.ico" type="image/ico" />
</head>
<body>
	<?php  
		$id_admin = $id_luar;
		$querylihat = $conn->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
		$lihat = $querylihat->fetch_array();
		$querylihat2 = $conn->query("SELECT * FROM user WHERE status='Admin' AND id_luar='$id_admin'");
		$lihat2 = $querylihat2->fetch_array();
	?>
    <div class="modal fade" id="modalLihat<?php echo $id_luar;?>">
		<div class="col-sm-2"></div>
		<div class="col-sm-9">
			<!-- Modal Header -->
		    
			<div class="grid-1">
			<h3 class="inner-tittle two"> Form Lihat Admin</h3><hr>
				<div class="form-body margin-form">
					<form action="menu_kelolaadmin.php" class="form-horizontal">
						<div class="form-group" align="left">
							<label for="focusedinput" class="col-sm-3 control-label konten-modal">Username Admin</label>
							<label class=" control-label ratakiri lihat-data" id="user-admin"><?php echo $lihat['user_admin'];?></label>
						</div>

						<div class="form-group" align="left">
							<label for="focusedinput" class="col-sm-3 control-label konten-modal">Email Admin</label>
							<label class=" control-label ratakiri lihat-data" id="user-admin"><?php echo $lihat2['email'];?></label>
						</div>
						
						<div class="form-group" align="left">
							<label for="focusedinput" class="col-sm-3 control-label konten-modal">Nama Admin</label>
							<label class=" control-label lihat-data" id="nama-admin"><?php echo $lihat['nama_admin'];?></label>
						</div>
						
						<div  align="right">
							<button data-dismiss="modal" type="submit" class="btn btn-default">Kembali</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>