<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Izin </h3>
		<div class="graph">
			<div class="tables">
				<table class="table table-hover"> 
					<thead> 
						<tr> 
							<th>#</th> 
							<th>Nama Pegawai</th> 
							<th>Keterangan</th> 
							<th>Aksi</th> 
						</tr> 
					</thead> 
					<tbody> 
						<?php
							$i=1;
							$ambil_daftar_absensi = $conn->query("SELECT * FROM absensi WHERE status_absensi='Izin' ORDER BY id_absensi DESC");
							while($absensi=$ambil_daftar_absensi->fetch_array()){
								$id_user = $absensi['id_user'];
								$ambil_user = $conn->query("SELECT * FROM user WHERE id_user='$id_user'");
								$user = $ambil_user->fetch_array();
								$id_pegawai = $user['id_luar'];
								$ambil_pegawai = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
								$pegawai = $ambil_pegawai->fetch_array();
								echo '<tr> 
							<th scope="row">'.$i.'</th> 
							<td>'.$pegawai['nama_pegawai'].'</td> 
							<td>'.$absensi['keterangan'].'</td>';
							if($absensi['status_acc']=='Approved'){
								echo '<td>Approved</td>';
							}
							elseif($absensi['status_acc']=='Decline'){
								echo '<td>Declined</td>';
							}
							elseif($absensi['status_acc']=='Pending'){
								echo '<td>Approve Decline</td>';
							} 
							echo '</tr>';
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