<!DOCTYPE HTML>
<html>
<body>
<?php include 'header.php'; 
	if ($_SESSION['jenis_user'] == "Super Admin" || $_SESSION['jenis_user'] == "Admin"){
?>
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
						<th class="header">Keterangan</th> 
						<th class="header">Tanggal Absen</th> 
						<th class="header">Lokasi</th> 
					</tr> 
				</thead> 
				<tbody> 
					<?php
						$i = 1;
						$ambil_daftar_absen = $conn->query("SELECT * FROM absensi WHERE status_acc='Approved' ORDER BY id_absensi DESC");
						while($pegawaiuser=$ambil_daftar_absen->fetch_array()){
							$id_user = $pegawaiuser['id_user'];
							$ambil_user = $conn->query("SELECT * FROM user WHERE id_user='$id_user'");
							$user = $ambil_user->fetch_array();
							$id_pegawai = $user['id_luar'];
							$ambil_pegawai = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
							$pegawai = $ambil_pegawai->fetch_array();
							$user = $ambil_user->fetch_array();
							echo '<tr class="tabel"> 
						<td class="notabel" style="padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;" scope="row">'.$i.'</td>  
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawai['nama_pegawai'].'</td>
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawaiuser['status_absensi'].'</td>
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawaiuser['keterangan'].'</td>
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawaiuser['tanggal'].'</td>
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawaiuser['ip_address'].'</td>  
						</tr>';
						$i++;
						//$i++;
						}
					?>  
				</tbody> 
			</table>
			</div>
<?php } include 'footer.php'; ?>
</body>
</html>