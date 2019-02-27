<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/ok.ico" type="image/ico" />
</head>
<body>
<?php include 'header.php'; 
	if ($_SESSION['jenis_user'] == "Super Admin" || $_SESSION['jenis_user'] == "Admin"){
?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Kelola Pegawai"
    </script>
    <!-- ALERT -->
    <?php if ($_SESSION['peringatan']!=""){?>
    <div class="alert1">
        <p class="alert-text"><?php echo $_SESSION['peringatan'];?></p>
    </div>
	<?php }?>
	<!--custom-widgets-->
		<h3 class="inner-tittle two" style="margin-bottom:5px;"><i class="fa fa-users"></i> &nbsp Kelola Pegawai </h3>
			<div>
				<a class="btn blue four marginl20 bgblue" data-toggle="modal" data-target="#modalTambah" data-placement="bottom" title="Tambah Pegawai">Tambah &nbsp <i class="fa fa-plus"> </i></a>
			</div>
			<?php include 'form_tambahpegawai.php';?>
			<div style="margin-top:20px;">
			<table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
				<thead> 
					<tr> 
						<th class="headerno">No</th> 
						<th class="header">Username</th>
						<th class="header">Email</th> 
						<th class="header">Nama Pegawai</th> 
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
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$user['email'].'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$pegawai['nama_pegawai'].'</td>
						<td align="center" class="isitabel" style="max-width: 10px; padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">
							<a class="btn blue four mini-btn bggreen" data-toggle="modal" data-target="#modalLihat'.$id_luar.'" title="Lihat"><i class="fa fa-eye"></i></a>';
							echo '<a class="btn blue four mini-btn bgorange" data-toggle="modal" data-target="#modalUbah'.$id_luar.'" data-placement="bottom" title="Ubah"><i class="fa fa-edit"></i></a>';
							//allert hapus
							$t1 = "'untuk menghapus username `".$user['username']."`?'";
							$tanya = 'onclick="return konfirmasi('.$t1.')"';
							echo '<a '.$tanya.' class="btn blue four mini-btn bgred" href="functions/hapus_pegawai.php?id_pegawai='.$id_luar.'" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash-o"></i></a>
						</td>  
					</tr>';
					include 'form_ubahpegawai.php';
					include 'form_lihatpegawai.php';
							$i++;
						}
					?>  
				</tbody> 
			</table>
			</div>
<?php } include 'footer.php'; ?>
</body>
</html>