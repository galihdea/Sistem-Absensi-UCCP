<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Lihat Admin"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Contoh Form Lihat Admin</h3>
		<div class="grid-1">
			<div class="form-body margin-form">
				<form method="POST" action="functions/tambah_admin.php" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Username Admin</label>
						<label class="col-sm-3 control-label lihat-data" id="user-admin">Username sampel</label>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Nama Admin</label>
						<label class="col-sm-3 control-label lihat-data" id="nama-admin">Nama sampel</label>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label ratakiri">Status Admin</label>
						<label class="col-sm-3 control-label lihat-data" id="stat-admin">Status sampel</label>
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