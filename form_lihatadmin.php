<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; 
		$id_admin = $_GET['id_admin'];
		$querylihat = $conn->query("SELECT * FROM admin WHERE id_admin='$id_admin'");
		$lihat = $querylihat->fetch_array();
	?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Lihat Admin"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Lihat Admin</h3>
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
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label ratakiri">Status Admin</label>
						<label class="col-sm-3 control-label lihat-data" id="stat-admin"><?php echo $lihat['status_admin'];?></label>
					</div>
					<div  align="right">
						<button type="submit" class="btn btn-default">Kembali</button>
					</div>
				</form>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>