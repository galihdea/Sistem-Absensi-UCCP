<!DOCTYPE HTML>
<html>
<body>
	<?php
		$id_pegawai = $id_luar;
		$querylihat = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
		$lihat = $querylihat->fetch_array();
	 ?>
    <script src="js/validator.js">//script validasi form. Source: http://1000hz.github.io/bootstrap-validator/</script>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Ubah Pegawai"
    </script>
	<!--custom-widgets-->
	<div class="modal fade" id="modalUbah<?php echo $id_luar;?>">
		<h3 class="inner-tittle two">Contoh Form Ubah Pegawai</h3>
		<div class="grid-1">
			<div class="form-body">
				<form method="POST" action="functions/ubah_pegawai.php?id_pegawai=<?php echo $id_pegawai;?>" class="form-horizontal" data-toggle="validator" role="form">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Username Pegawai</label>
						<div class="col-sm-8">
							<input name="username" type="text" class="form-control1" id="focusedinput" placeholder="Username" value="<?php echo $lihat['user_pegawai'];?>" disabled>
						</div>
					</div>
					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nama Pegawai</label>
						<div class="col-sm-8">
							<input name="namapegawai" type="text" class="form-control1" id="inputName" placeholder="Nama" value="<?php echo $lihat['nama_pegawai'];?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Divisi Pegawai</label>
						<div class="col-sm-8">
							<select name="divisipegawai" id="selector1" class="form-control1" required>
								<option value="A" <?php if($lihat['divisi_pegawai']=='A') echo "selected";?>>A</option>
								<option value="B" <?php if($lihat['divisi_pegawai']=='B') echo "selected";?>>B</option>
								<option value="C" <?php if($lihat['divisi_pegawai']=='C') echo "selected";?>>C</option>
								</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Jabatan Pegawai</label>
						<div class="col-sm-8">
							<select name="divisipegawai" id="selector1" class="form-control1" required>
								<option value="Manager Divisi" <?php if($lihat['jabatan_pegawai']=='Manager Divisi') echo "selected";?>>Manager Divisi</option>
								<option value="Staf Divisi" <?php if($lihat['jabatan_pegawai']=='Staf Divisi') echo "selected";?>>Staf Divisi</option>
								<option value="Intern" <?php if($lihat['jabatan_pegawai']=='Intern') echo "selected";?>>Intern</option>
								</select>
						</div>
					</div>
                    <a href="menu_kelolapegawai.php" class="btn blue four bgred tombol-back">Cancel</a>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>