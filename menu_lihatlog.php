<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Riwayat Absensi"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two" style="margin-bottom:5px;"><i class="fa fa-bars"></i> &nbsp Riwayat Absensi </h3>
			<div style="margin-top:20px;">
			<table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
				<thead> 
					<tr> 
						<th class="headerno">No</th> 
						<th class="header">Nama Pegawai</th> 
						<th class="header">Status</th> 
						<th class="header">Aksi</th> 
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
							echo '<tr class="tabel"> 
						<td class="notabel" style="padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;" scope="row">'.$i.'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$user['username'].'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawai['nama_pegawai'].'</td>
						<td align="center" class="isitabel" style="max-width: 10px; padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">
							<a class="btn blue four mini-btn bggreen" href="#" data-toggle="tooltip" data-placement="bottom" title="Lihat"><i class="fa fa-eye"></i></a>
							<a class="btn blue four mini-btn bgorange" href="#" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fa fa-edit"></i></a>
							<a class="btn blue four mini-btn bgred" href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o"></i></a>
						</td>  
					</tr>';
							$i++;
						}
					?>  
				</tbody> 
			</table>
			</div>
 <?php include 'footer.php'; ?>
</body>
</html>