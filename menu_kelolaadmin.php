<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; ?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="Kelola Admin"
    </script>
	<!--custom-widgets-->
		<h3 class="inner-tittle two" style="margin-bottom:5px;"><i class="fa fa-user"></i> &nbsp Kelola Admin </h3>
			<div>
				<a class="btn blue four marginl20 bgblue" href="form_tambahadmin.php" data-toggle="tooltip" data-placement="bottom" title="Tambah Admin">Tambah &nbsp <i class="fa fa-plus"> </i></a>
			</div>
			<div style="margin-top:20px;">
			<table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
				<thead> 
					<tr> 
						<th class="headerno">No</th> 
						<th class="header">Username</th> 
						<th class="header">Nama Admin</th> 
						<th class="header">Aksi</th> 
					</tr> 
				</thead> 
				<tbody> 
					<?php
						$i = 1;
						$ambil_daftar_admin = $conn->query("SELECT * FROM admin");
						while($admin=$ambil_daftar_admin->fetch_array()){
							$id_luar = $admin['id_admin'];
							$ambil_user_admin = $conn->query("SELECT * FROM user WHERE id_luar='$id_luar' AND status='admin' ");
							$user = $ambil_user_admin->fetch_array();
							echo '<tr class="tabel"> 
						<td class="notabel" style="padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;" scope="row">'.$i.'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$user['username'].'</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">'.$admin['nama_admin'].'</td>
						<td align="center" class="isitabel" style="max-width: 10px; padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">
							<a class="btn blue four mini-btn bggreen" href="form_lihatadmin.php?id_admin='.$id_luar.'" data-toggle="tooltip" data-placement="bottom" title="Lihat"><i class="fa fa-eye"></i></a>
							<a class="btn blue four mini-btn bgorange" href="" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="fa fa-edit"></i></a>
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