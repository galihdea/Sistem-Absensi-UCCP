<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Kelola Pegawai"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two">Kelola Pegawai </h3>
		<div align="right"><a href="form_tambahpegawai.php" onclick="load_page()" class="btn blue four" style="padding: 10px 30px; margin-right:0px">Add</a></div><br>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
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
						<td><a class="btn blue four">Lihat</a> <a class="btn blue four">Ubah</a> <a class="btn blue four">Hapus</a></td>  
					</tr>';
							$i++;
						}
					?>  
				</tbody> 
			</table>
 <?php include 'footer.php'; ?>
</body>
</html>