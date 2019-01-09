<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Kelola Pegawai </h3>
		<div class="graph">
			<div class="tables">
				<table class="table table-hover"> 
					<thead> 
						<tr> 
							<th>#</th> 
							<th>Username</th> 
							<th>Nama Pegawai</th> 
							<th>Aksi</th> 
						</tr> 
					</thead> 
					<tbody> 
						<?php
							$i = 1;
							$ambil_daftar_pegawai = $conn->query("SELECT * FROM pegawai");
							while($pegawai=$ambil_daftar_pegawai->fetch_array()){
								$id_luar = $pegawai['id_pegawai'];
								$ambil_user_pegawai = $conn->query("SELECT * FROM user WHERE id_luar='$id_luar' AND status='Pegawai' ");
								$user = $ambil_user_pegawai->fetch_array();
								echo '<tr> 
							<th scope="row">'.$i.'</th> 
							<td>'.$user['username'].'</td> 
							<td>'.$pegawai['nama_pegawai'].'</td>
							<td>Lihat Ubah Hapus</td>  
						</tr>';
								$i++;
							}
						?>  
					</tbody> 
				</table>
			</div>
		</div>
 <?php include 'footer.php'; ?>
</body>
</html>