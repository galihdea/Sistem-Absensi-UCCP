<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/ok.ico" type="image/ico" />
</head>
<body>
<?php include 'header.php'; 
include 'functions/ip_check_function.php';
	if ($_SESSION['jenis_user'] == "Super Admin" || $_SESSION['jenis_user'] == "Admin"){
?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Approval Izin"
    </script>
    <!-- ALERT -->
    <?php if ($_SESSION['peringatan']!=""){?>
    <div class="alert1">
        <p class="alert-text"><?php echo $_SESSION['peringatan'];?></p>
    </div>
	<?php }?>
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
						if($_SESSION['jenis_user']=="Super Admin"){
							$jenis = "Manajer Divisi";
						}
						else if($_SESSION['jenis_user']=="Admin"){
							$jenis = "Pegawai";
						}
						$ambil_daftar_pegawai = $conn->query("SELECT * FROM absensi WHERE status_absensi='izin' AND CURDATE()=DATE(tanggal) ORDER BY id_absensi DESC");
						while($pegawaiuser=$ambil_daftar_pegawai->fetch_array()){
							$id_absensi = $pegawaiuser['id_absensi'];
							$id_user = $pegawaiuser['id_user'];
							$dataip = ambilIP($pegawaiuser['ip_address']);
							//var_dump($dataip);
							$j = 0;
							foreach($dataip AS $key => $value){
								$data[$j] = $value;
								$j++;
							}
							$latlon = $data[4].",".$data[5];
							$ambil_user = $conn->query("SELECT * FROM user WHERE id_user='$id_user'");
							$user = $ambil_user->fetch_array();
							$id_pegawai = $user['id_luar'];
							$ambil_pegawai = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
							$pegawai = $ambil_pegawai->fetch_array();
							if (($pegawai['jabatan_pegawai']=="Intern") || ($pegawai['jabatan_pegawai']=="Staf Divisi")){
								$jenis_pegawai="Pegawai";
							}else{
								$jenis_pegawai="Manajer Divisi";
							}
							if($jenis==$jenis_pegawai){
								echo '<tr class="tabel"> 
							<td class="notabel" style="padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;" scope="row">'.$i.'</td> 
							<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawai['nama_pegawai'].'</td> 
							<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawaiuser['keterangan'].'</td>
							<td align="center" class="isitabel" style="width: 20px; padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;"> 
								<a style="width:70px;" class="btn blue four mini-btn bglblue" data-toggle="modal" data-target="#myModal'.$id_absensi.'"> View</a> 
								<!-- The Modal -->
		  <div class="modal fade" id="myModal'.$id_absensi.'">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">Filter</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <form method="POST" action="" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Alamat IP</label>
						<label for="focusedinput" class="col-sm-10 control-label ratakiri">'.$data[0].'</label>
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Provinsi</label>
						<label for="focusedinput" class="col-sm-10 control-label ratakiri">'.$data[2].'</label>
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Kota</label>
						<label for="focusedinput" class="col-sm-10 control-label ratakiri">'.$data[3].'</label>
						<label for="focusedinput" class="col-sm-2 control-label ratakiri">Lokasi</label>
						<a href="https://www.google.com/maps/search/?api=1&query='.$latlon.'"><label for="focusedinput" class="col-sm-10 control-label ratakiri">Lihat di Google Maps</label></a>
					</div>
					<!-- Modal footer -->
			        <div class="modal-footer">
			          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        </div>
				</form>
		        
		      </div>
		    </div>
		  </div>
		</div>
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
						}
					?>  
				</tbody> 
			</table>
			</div>
<?php } include 'footer.php'; ?>
</body>
</html>
