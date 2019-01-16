<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Lihat Pegawai"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Lihat Pegawai</h3>
		<div class="grid-1">
			<div class="form-body">
				<form method="POST" action="functions/tambah_pegawai.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Username Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="user-pegawai">Username sampel</label>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label lihat-data">Nama Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="nama-pegawai">Nama sampel</label>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label lihat-data">Divisi Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="div-pegawai">Divisi sampel</label>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label lihat-data">Status Pegawai</label>
						<label class="col-sm-3 control-label lihat-data" id="stat-pegawai">Status sampel</label>
					</div>
					<button type="submit" class="btn btn-default">Kembali</button>
				</form>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>