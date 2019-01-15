<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Kelola Admin"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Kelola Pegawai </h3>
			<div>
				<a class="btn blue four tooltips marginl20" href="form_tambahpegawai.php"><span>Tambah Admin</span>Tambah  <i class="fas fa-plus"></i></a>
			</div>
			<div style="margin-top:20px;">
			<table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
				<thead> 
					<tr> 
						<th class="header">No</th> 
						<th class="header">Username</th> 
						<th class="header">Nama Pegawai</th> 
						<th class="header">Aksi</th> 
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
							<td class="hitam tebal notabel" style="max-width: 8px; padding: 5px 15px 5px 15px !important;" scope="row">'.$i.'</td> 
						<td class="hitam isitabel" style="padding: 5px 5px 5px 15px !important;">'.$user['username'].'</td> 
						<td class="hitam isitabel" style="padding: 5px 5px 5px 15px !important;">'.$pegawai['nama_pegawai'].'</td>
						<td align="center" class="hitam isitabel" style="max-width: 10px; padding: 5px 5px 5px 15px !important;">
							<a class="btn blue four mini-btn tooltips" href="#"><span>Lihat</span><i class="fa fa-eye"></i></a>
							<a class="btn blue four mini-btn tooltips" href="#"><span>Ubah</span><i class="fa fa-edit"></i></a>
							<a class="btn blue four mini-btn tooltips" href="#"><span>Hapus</span><i class="far fa-trash-alt"></i></a>
						</td>  
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