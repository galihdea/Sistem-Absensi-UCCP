<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; 
		$id_pegawai = $_GET['id_pegawai'];
		$querylihat = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
		$lihat = $querylihat->fetch_array();
	?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Lihat Pegawai"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Lihat Pegawai</h3>
		<div class="grid-1">
			<div class="form-body">
				<form action="menu_kelolapegawai.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Username Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="user-pegawai"><?php echo $lihat['user_pegawai'];?></label>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Nama Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="nama-pegawai"><?php echo $lihat['nama_pegawai'];?></label>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label lihat-data">Divisi Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="div-pegawai"><?php echo $lihat['divisi_pegawai'];?></label>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label lihat-data">Jabatab Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="stat-pegawai"><?php echo $lihat['jabatan_pegawai'];?></label>
					</div>
					<button type="submit" class="btn btn-default">Kembali</button>
				</form>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>