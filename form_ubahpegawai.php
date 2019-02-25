<!DOCTYPE HTML>
<html>
<body>
	<?php
		$id_pegawai = $id_luar;
		$querylihat = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
		$lihat = $querylihat->fetch_array();
		$querylihat2 = $conn->query("SELECT * FROM user WHERE status='Pegawai' AND id_luar='$id_pegawai'");
		$lihat2 = $querylihat2->fetch_array();
	 ?>
    <script src="js/validator.js">//script validasi form. Source: http://1000hz.github.io/bootstrap-validator/</script>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Ubah Pegawai"
	</script>
	<!--custom-widgets-->
	<div class="modal fade" id="modalUbah<?php echo $id_luar;?>">
	<div class="col-sm-2"></div>
	<div class="col-sm-9">
		<div class="grid-1" style="padding-right: 30px;padding-left: 20px;margin-right:31px; margin-left:10px;">
			<h3 class="inner-tittle two"> Form Ubah Pegawai</h3><hr>
			<div class="form-body margin-form">
				<form method="POST" action="functions/ubah_pegawai.php?id_pegawai=<?php echo $id_pegawai;?>" class="form-horizontal" data-toggle="validator" role="form">
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Email</label>
                        <div class="col-sm-9">
                            <input name="email" type="email" class="form-control1"  data-error="Maaf, format email tidak sesuai." placeholder="Email" value="<?php echo $lihat2['email'];?>" required style="margin-bottom: 0;">
                            <input name="hidden1" type="text" class="invicible">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Username Pegawai</label>
                        <div class="col-sm-9">
                            <input name="username" type="text" class="form-control1 bgdisable" id="focusedinput" placeholder="Username" value="<?php echo $lihat['user_pegawai'];?>" disabled style="margin-bottom: 0;">
                            <input name="hidden1" type="text" class="invicible">
                        </div>
                    </div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Nama Pegawai</label>
						<div class="col-sm-9">
							<input name="namapegawai" type="text" class="form-control1" id="inputName" placeholder="Nama" value="<?php echo $lihat['nama_pegawai'];?>" required style="margin-bottom: 0;">
                            <input name="hidden1" type="text" class="invicible">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Divisi Pegawai</label>
						<div class="col-sm-9">
							<select name="divisipegawai" id="selector1" class="form-control1" required style="margin-bottom: 0;">
								<option value="A" <?php if($lihat['divisi_pegawai']=='A') echo "selected";?>>A</option>
								<option value="B" <?php if($lihat['divisi_pegawai']=='B') echo "selected";?>>B</option>
								<option value="C" <?php if($lihat['divisi_pegawai']=='C') echo "selected";?>>C</option>
							</select>
                            <input name="hidden1" type="text" class="invicible">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-3 control-label ratakiri konten-modal">Jabatan Pegawai</label>
						<div class="col-sm-9">
							<select name="jabatanpegawai" id="selector1" class="form-control1" required style="margin-bottom: 0;">
								<option value="Manager Divisi" <?php if($lihat['jabatan_pegawai']=='Manager Divisi') echo "selected";?>>Manager Divisi</option>
								<option value="Staf Divisi" <?php if($lihat['jabatan_pegawai']=='Staf Divisi') echo "selected";?>>Staf Divisi</option>
								<option value="Intern" <?php if($lihat['jabatan_pegawai']=='Intern') echo "selected";?>>Intern</option>
							</select>
                            <input name="hidden1" type="text" class="invicible">
						</div>
					</div>
					 
					 <div  align="right">
                    <a  data-dismiss="modal" class="btn blue four bgred tombol-back">Cancel</a>
					<button type="submit" class="btn btn-default">Submit</button>
					</div> 
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>