<!DOCTYPE HTML>
<html>

<body>
<?php include 'header.php';
	if ($_SESSION['jenis_user'] == "Pegawai"){
?>
    <script>
        //Value untuk mengisi Home / ....
        let page_header="Histori Karyawan"
    </script>
    <!--custom-widgets-->
		<h3 class="inner-tittle two" style="margin-bottom:5px;"><i class="fa fa-table"></i> &nbsp Histori Karyawan </h3>
			<div style="margin-top:20px;">
			<table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
				<thead> 
					<tr> 
						<th class="header">Tanggal</th> 
						<th class="header">Status Absen</th> 
						<th class="header">Status Acc</th> 
						<th class="header">Keterangan</th> 
					</tr> 
				</thead> 
				<tbody> 
					<?php
						$iduser = $_SESSION['id_user'];
						$i = 1;
						$ambil_daftar_absen = $conn->query("SELECT * FROM absensi WHERE id_user='$iduser' ORDER BY tanggal DESC");
						while($absen=$ambil_daftar_absen->fetch_array()){
							echo '<tr class="tabel"> 
						<td class="notabel" style="padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;" scope="row">'.$absen['tanggal'].'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$absen['status_absensi'].'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$absen['status_acc'].'</td>
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$absen['keterangan'].'</td>  
					</tr>';
							$i++;
						}
					?>  
				</tbody> 
			</table>
			</div>
<?php } include 'footer.php';?>
</body>

</html>