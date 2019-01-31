<!DOCTYPE HTML>
<html>
<body>
	<?php  
		$id_admin = $id_luar;
		$querylihat = $conn->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
		$lihat = $querylihat->fetch_array();
	?>
    <div class="modal fade" id="modalLihat<?php echo $id_luar;?>">
		<div class="col-sm-2"></div>
		<div class="grid-1 col-sm-9">
			<!-- Modal Header -->
		    <h2 class="header-modal">Lihat Admin</h2>
			<div class="grid-1">
				<div class="form-body margin-form">
					<form action="menu_kelolaadmin.php" class="form-horizontal">
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label ratakiri">Username Admin</label>
							<label class="col-sm-3 control-label lihat-data" id="user-admin"><?php echo $lihat['user_admin'];?></label>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label ratakiri">Nama Admin</label>
							<label class="col-sm-3 control-label lihat-data" id="nama-admin"><?php echo $lihat['nama_admin'];?></label>
						</div>
						
						<div  align="right">
							<button type="submit" class="btn btn-default">Kembali</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
 <?php include 'footer.php'; ?>
</body>
</html>