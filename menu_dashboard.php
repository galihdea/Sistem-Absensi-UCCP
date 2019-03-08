<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/ok.ico" type="image/ico" />
</head>
<body>
	<?php include 'header.php'; 
		$querypegawai = $conn->query("SELECT * FROM pegawai");
		$jumlahpegawai = mysqli_num_rows($querypegawai);
		$querymasuk = $conn->query("SELECT * FROM absensi WHERE status_absensi='masuk' AND DATE(tanggal)=CURDATE()");
		$jumlahmasuk = mysqli_num_rows($querymasuk);
		$querytidakmasuk = $conn->query("SELECT * FROM absensi WHERE (status_absensi='izin' OR status_absensi='sakit') AND status_acc='Approved' AND DATE(tanggal)=CURDATE()");
		$jumlahtidakmasuk = mysqli_num_rows($querytidakmasuk);
		/*cek disini*/
		$querytidakmasuk2 = $conn->query("SELECT * FROM absensi WHERE status_absensi='cuti' AND status_acc='Approved'");
	    $total_cuti = 0;
	    while($cuti=$querytidakmasuk2->fetch_array()){
	    	$keterangan = $cuti['keterangan'];
	    	$cuti1 = tanggal_balik_semula($keterangan); 
	    	if ((date("m/d/Y")>=tanggal_semula_1($cuti1))&&(date("m/d/Y")<=tanggal_semula_2($cuti1))){
	    		$total_cuti = $total_cuti +1;
	    	}
	    }
	    $jumlahtidakmasuk += $total_cuti;
	?>
	<script>
        //Value untuk mengisi Home / ....
        let page_header="...";
    </script>
    <!-- ALERT -->
    <?php if ($_SESSION['peringatan']!=""){?>
    <div class="alert1">
        <p class="alert-text"><?php echo $_SESSION['peringatan'];?></p>
    </div>
	<?php } ?>
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
		<div class="col-sm-3_5 col-xs-12 bggreen2 dashboard" align="center">
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
		<div class="col-sm-3_5 col-xs-12 bgred2 dashboard" align="center">
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
	<?php } if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_absen == "Boleh" && $lagi_cuti == "Tidak"){?>
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
			$icon = 'fa-check-circle';
		}elseif ($status_acc == "Pending"){
			$warna = 'bgorange2';
			$tulisan = 'Pending!!!';
			$icon = 'fa-clock-o';
		};
		if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_absen == "Tidak" && $lagi_cuti == "Tidak"){?>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<a>
		<div class="col-sm-8 dashboard <?php echo $warna;?>" align="center" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<i class="fa <?php echo $icon;?>" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Absen</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;"><?php echo $tulisan;?></p>
			</div><!-- 
			<div class="col-sm-3">
				<p style="font-size:60px; margin:12px; color:white;">99</p>
			</div> -->
		</div>
		</a>
		<div class="col-sm-2"></div>
	</div>
	<!-- Absen Cuti pegawai -->
	<?php } 
		if ($boleh_cuti == 'Tidak'){
			if ($status_acc_cuti == "Approved"){
				$warna = 'bggreen2';
				$tulisan_atas = 'Ambil Cuti';
				$tulisan = 'Berhasil!!!';
				$icon = 'fa-check-circle';
			}elseif ($status_acc_cuti == "Pending"){
				$warna = 'bgorange2';
				$tulisan_atas = 'Ambil Cuti';
				$tulisan = 'Pending!!!';
				$icon = 'fa-clock-o';
			}
		}elseif ($boleh_cuti == 'Boleh'){
			$warna = 'bgyellow2';
			$tulisan_atas = 'Ambil';
			$tulisan = 'Cuti';
			$icon = 'fa-flag';
		}
		if ($_SESSION['jenis_user'] == "Pegawai" && $lagi_cuti == "Tidak"){?>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<?php if ($boleh_cuti == 'Boleh'){?><a href="menu_absencuti.php" onclick="load_page()"><?php }?>
		<div class="col-sm-8 dashboard <?php echo $warna;?>" align="center" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<i class="fa <?php echo $icon;?>" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;"><?php echo $tulisan_atas;?></p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;"> <?php echo $tulisan;?></p>
			</div>
		<?php if ($boleh_cuti == 'Boleh'){?>
			<div class="col-sm-12">
				<p class="dashboard-detail">Klik disini..</p>
			</div>
		<?php }?>
		</div>
		</a>
		<div class="col-sm-2"></div>
	</div>
	<!-- Pegawai sedang cuti -->
	<?php }
		if ($_SESSION['jenis_user'] == "Pegawai" && $lagi_cuti == "Ya"){?>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 dashboard bgorange2" align="center" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<i class="fa fa-calendar" style="margin: 20px 0px !important; font-size:70px; margin:10px; color:white;"></i>
			</div>
			<div class="col-sm-6">
				<p style="font-size:20px; margin:10px 0px 0px 5px; color:white; text-align:left;">Anda</p>
				<p style="font-size:40px; margin:5px; color:white; text-align:left;"> Sedang Cuti</p>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
<?php } include 'footer.php'; ?>
</body>
</html>