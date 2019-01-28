<!DOCTYPE HTML>
<html>
<body>
<?php include 'header.php'; 
	if ($_SESSION['jenis_user'] == "Super Admin" || $_SESSION['jenis_user'] == "Admin"){
?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Approval Izin"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two" style="margin-bottom:5px;"><i class="fa fa-book"></i> &nbsp Approval Izin &nbsp 
			<a href="menu_cuti.php" onclick="load_page()" data-toggle="tooltip" data-placement="bottom" title="Approval Cuti"><i class="fa fa-caret-right"></i></a> 
		</h3>
			<div style="margin-top:20px;">
			<table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
				<thead> 
					<tr> 
						<th class="headerno">No</th> 
						<th class="header">Nama Pegawai</th> 
						<th class="header">Keterangan</th> 
						<th class="header">Lokasi</th> 
						<th class="header">Status</th> 
						<th class="header">Aksi</th> 
					</tr> 
				</thead> 
				<tbody> 
					<?php
						$i = 1;
						$ambil_daftar_pegawai = $conn->query("SELECT * FROM absensi WHERE status_absensi='izin' AND CURDATE()=DATE(tanggal) ORDER BY id_absensi DESC");
						while($pegawaiuser=$ambil_daftar_pegawai->fetch_array()){
							$id_user = $pegawaiuser['id_user'];
							$ambil_user = $conn->query("SELECT * FROM user WHERE id_user='$id_user'");
							$user = $ambil_user->fetch_array();
							$id_pegawai = $user['id_luar'];
							$ambil_pegawai = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
							$pegawai = $ambil_pegawai->fetch_array();
							echo '<tr class="tabel"> 
						<td class="notabel" style="padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;" scope="row">'.$i.'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawai['nama_pegawai'].'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawaiuser['keterangan'].'</td>
						<td align="center" class="isitabel" style="width: 20px; padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;"> 
							<a style="width:70px;" class="btn blue four mini-btn bgwhite"> View</a> 
						</td>
						<td align="center" class="isitabel" style="width: 20px; padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;">';
						if ($pegawaiuser['status_acc']=="Approved" ){
							echo '<a style="width:70px;cursor:default;" class="btn blue four mini-btn bggreen"> Approved</a>';
						}elseif ($pegawaiuser['status_acc']=="Decline" ){
							echo '<a style="width:70px;cursor:default;" class="btn blue four mini-btn bgred"> Decline</a>';
						}elseif ($pegawaiuser['status_acc']=="Pending" ){
							echo '<a style="width:70px;cursor:default;" class="btn blue four mini-btn bgorange"> Pending</a>';
						}
						echo '</td>
						<td align="center" class="isitabel" style="max-width: 10px; padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">';
						if ($pegawaiuser['status_acc'] !="Pending"){
							echo '<a style="cursor:default;" class="btn blue four mini-btn bgblue" href="#" data-toggle="tooltip" data-placement="bottom" title="Done">Done</a>
						</td>  
					</tr>';
						}else{	
							echo '<a onclick="return konfirmasi1()" class="btn blue four mini-btn bggreen" href="functions/ubah_status_acc_izin.php?status=Approved&id_absensi='.$pegawaiuser['id_absensi'].'" data-toggle="tooltip" data-placement="bottom" title="Approved"><i class="fa fa-check"></i></a>
							<a onclick="return konfirmasi2()" class="btn blue four mini-btn bgred" href="functions/ubah_status_acc_izin.php?status=Decline&id_absensi='.$pegawaiuser['id_absensi'].'" data-toggle="tooltip" data-placement="bottom" title="Decline"><i class="fa fa-times"></i></a>
						</td>  
					</tr>';
						}
							$i++;
						}
					?>  
				</tbody> 
			</table>
			</div>
<?php } include 'footer.php'; ?>
</body>
</html>
