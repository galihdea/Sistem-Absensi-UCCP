<!DOCTYPE HTML>
<html>
<body>
	<?php
		$id_pegawai = $id_luar;
		$querylihat = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
		$lihat = $querylihat->fetch_array();
	?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Lihat Pegawai"
    </script>
	<!--custom-widgets-->
	<div class="modal fade" id="modalLihat<?php echo $id_luar;?>">
		
		<div class="col-sm-2"></div>
		<div class="col-sm-9">
		<div class="grid-1">
		<h3 class="inner-tittle two">Contoh Form Lihat Pegawai</h3><hr>
			<div class="form-body margin-form">
				<form action="menu_kelolapegawai.php" class="form-horizontal">
					<div class="form-group" align="left">
						<label for="focusedinput" class="col-sm-3 control-label konten-modal">Username Pegawai</label>
						<label class="control-label ratakiri lihat-data" id="user-pegawai"><?php echo $lihat['user_pegawai'];?></label>
					</div>
					<div class="form-group" align="left">
						<label for="focusedinput" class="col-sm-3 control-label konten-modal">Nama Pegawai</label>
						<label class="control-label lihat-data" id="nama-pegawai"><?php echo $lihat['nama_pegawai'];?></label>
					</div>
					<div class="form-group" align="left" >
						<label for="selector1" class="col-sm-3 control-label konten-modal">Divisi Pegawai</label>
						<label class="control-label lihat-data" id="div-pegawai"><?php echo $lihat['divisi_pegawai'];?></label>
					</div>
					<div class="form-group" align="left">
						<label for="selector1" class="col-sm-3 control-label konten-modal">Jabatan Pegawai</label>
						<label class="control-label lihat-data" id="stat-pegawai"><?php echo $lihat['jabatan_pegawai'];?></label>
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