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
							<th>Nama Admin</th>
							<th>Aksi</th> 
						</tr> 
					</thead> 
					<tbody> 
						<?php
							$i = 1;
							$ambil_daftar_admin = $conn->query("SELECT * FROM admin");
							while($admin=$ambil_daftar_admin->fetch_array()){
								$id_luar = $admin['id_admin'];
								$ambil_user_admin = $conn->query("SELECT * FROM user WHERE id_luar='$id_luar' AND status='Admin' ");
								$user = $ambil_user_admin->fetch_array();
								echo '<tr> 
							<th scope="row">'.$i.'</th> 
							<td>'.$user['username'].'</td> 
							<td>'.$admin['nama_admin'].'</td>
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