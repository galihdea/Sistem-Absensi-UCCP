<!DOCTYPE HTML>
<html>
<body>
	<?php include 'header.php'; 
		$querypegawai = $conn->query("SELECT * FROM pegawai");
		$jumlahpegawai = mysqli_num_rows($querypegawai);
		$querymasuk = $conn->query("SELECT * FROM absensi WHERE status_absensi='masuk' AND DATE(tanggal)=CURDATE()");
		$jumlahmasuk = mysqli_num_rows($querymasuk);
		$querytidakmasuk = $conn->query("SELECT * FROM absensi WHERE (status_absensi='izin' OR status_absensi='cuti') AND status_acc='Approved' AND DATE(tanggal)=CURDATE()");
		$jumlahtidakmasuk = mysqli_num_rows($querytidakmasuk);
	?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="..."
    </script>
	<!--Dashboard Admin and Super Admin-->
	<?php if ($_SESSION['jenis_user'] == "Super Admin" || $_SESSION['jenis_user'] == "Admin"){?>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<a href="menu_kelolapegawai.php" onclick="load_page()">
		<div class="col-sm-8 bgblue2 dashboard" align="center" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<i class="fa fa-users" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Jumlah</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;">Pegawai</p>
			</div>
			<div class="col-sm-3">
				<p style="font-size:60px; margin:12px; color:white;"><?php echo $jumlahpegawai;?></p>
			</div>
			<div class="col-sm-12">
				<p class="dashboard-detail">Lihat Pegawai..</p>
			</div>
		</div>
		</a>
		<div class="col-sm-2"></div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<a href="menu_lihatlog.php" onclick="load_page()">
		<div class="col-sm-4 bggreen2 dashboard" align="center" style="width: 32.83%;">
			<div class="col-sm-3">
				<i class="fa fa-check-circle" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Hari Ini</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;">Masuk</p>
			</div>
			<div class="col-sm-3">
				<p style="font-size:60px; margin:12px 0px; color:white;"><?php echo $jumlahmasuk;?></p>
			</div>
			<div class="col-sm-12">
				<p class="dashboard-detail">Lihat Daftar Absen..</p>
			</div>
		</div>
		</a>
		<div class="col-sm-1" style="margin:0px; padding: 0px; width:1%;"> &nbsp </div>
		<a href="menu_cuti.php" onclick="load_page()">
		<div class="col-sm-4 bgred2 dashboard" align="center" style="width: 32.83%;">
			<div class="col-sm-3">
				<i class="fa fa-minus-circle" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Hari Ini</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;">Absen</p>
			</div>
			<div class="col-sm-3">
				<p style="font-size:60px; margin:12px 0px; color:white;"><?php echo $jumlahtidakmasuk;?></p>
			</div>
			<div class="col-sm-12">
				<p class="dashboard-detail">Lihat Pengajuan Absen..</p>
			</div>
		</div>
		</a>
		<div class="col-sm-2"></div>
	</div>
	<!--Dashboard Pegawai Belum Absen-->	
	<?php } if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_absen == "Boleh"){?>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<a href="menu_absenkaryawan.php" onclick="load_page()">
		<div class="col-sm-8 bggreen2 dashboard" align="center" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<i class="fa fa-check-circle" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Absen</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;">Masuk</p>
			</div>
			<div class="col-sm-3">
				<p style="font-size:60px; margin:12px; color:white;"><?php echo $jumlahmasuk;?></p>
			</div>
			<div class="col-sm-12">
				<p class="dashboard-detail">Klik disini..</p>
			</div>
		</div>
		</a>
		<div class="col-sm-2"></div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<a href="menu_absenizin.php" onclick="load_page()">
		<div class="col-sm-8 bgred2 dashboard" align="center" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<i class="fa fa-minus-circle" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Absen</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;">Tidak Masuk</p>
			</div>
			<div class="col-sm-3">
				<p style="font-size:60px; margin:12px; color:white;"><?php echo $jumlahtidakmasuk;?></p>
			</div>
			<div class="col-sm-12">
				<p class="dashboard-detail">Klik disini..</p>
			</div>
		</div>
		</a>
		<div class="col-sm-2"></div>
	</div>
	<!--Dashboard Pegawai Sudah Absen-->	
	<?php } 
		if ($status_acc == "Approved"){
			$warna = 'bggreen2';
			$tulisan = 'Berhasil!!!';
		}elseif ($status_acc == "Pending"){
			$warna = 'bgorange2';
			$tulisan = 'Pending!!!';
		};
		if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_absen == "Tidak"){?>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<a>
		<div class="col-sm-8 dashboard <?php echo $warna;?>" align="center" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<i class="fa fa-check-circle" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Absen</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;"><?php echo $tulisan;?></p>
			</div>
			<div class="col-sm-3">
				<p style="font-size:60px; margin:12px; color:white;">99</p>
			</div>
		</div>
		</a>
		<div class="col-sm-2"></div>
	</div>
<?php } include 'footer.php'; ?>
</body>
</html>