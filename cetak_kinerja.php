<?php
    //fungsi tanggal_indo dipindahkan ke file /functions/convert_tanggal.php , karena di php gabisa import specific function dari file php

    include 'functions/koneksi.php';
	include 'functions/convert_tanggal.php';
	$tanggal_awal = $_GET['tanggal_awal'];
	$tanggal_akhir = $_GET['tanggal_akhir'];
	$jumlah_hari = $_GET['jumlah_hari'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Kinerja Pegawai</title>
	<script type="text/javascript">window.print()</script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css'>
</head>
<body>

    <div style="margin-left: 10px;">
        <div><img src="assets/logo/Logo%20UCCP%202%20(800x800).png" align="left" height="50px" style="margin-top: 4px;"></div>
        <div><h3 class="inner-tittle two" style="margin-bottom:5px;"> &nbsp Riwayat Kinerja</h3></div>
        <div><h3 class="inner-tittle two" style="margin-bottom:5px;margin-top: 0px;"> &nbsp Periode
                <?php echo tanggal_indo($tanggal_awal) .' s.d '. tanggal_indo($tanggal_akhir)?>
            </h3></div>
    </div>
    <hr style="border-width: 5px;margin-left: 10px;margin-right: 10px;margin-top: 20px;margin-bottom: 15px;">
	<div style="margin-left: 10px;margin-right: 10px;">
        <table class="table table-bordered table-striped" width="100%">
		<tr>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Divisi</th>
			<th>Jabatan</th>
			<th>Kinerja</th>
		</tr>
		<?php
			echo'';
            $i = 1;
    		$ambil_daftar_pegawai = $conn->query("SELECT * FROM pegawai");
    		while ($pegawai = $ambil_daftar_pegawai->fetch_array()) {
        		$id_luar = $pegawai['id_pegawai'];
        		$ambil_user_pegawai = $conn->query("SELECT * FROM user WHERE id_luar='$id_luar' AND status='Pegawai'");
        		$user = $ambil_user_pegawai->fetch_array();
        		$id_user = $user['id_user'];
        		if ((!(isset($tanggal_awal))) && (!(isset($tanggal_akhir)))) {
            		$tanggal_awal = '2015-01-01';
            		$tanggal_akhir = '2015-01-31';
            		$jumlah_hari = '31';
        		}
        		$ambil_absensi = $conn->query("SELECT * FROM absensi WHERE id_user='$id_user' AND tanggal >= '$tanggal_awal' AND tanggal <= '$tanggal_akhir'");
        		$total_absensi = mysqli_num_rows($ambil_absensi);
        		$ambil_absensi_masuk = $conn->query("SELECT * FROM absensi WHERE id_user='$id_user' AND tanggal >= '$tanggal_awal' AND tanggal <= '$tanggal_akhir' AND status_acc='Approved' AND status_absensi='masuk'");
        		$total_masuk = mysqli_num_rows($ambil_absensi_masuk);
        		$ambil_absensi_izin = $conn->query("SELECT * FROM absensi WHERE id_user='$id_user' AND tanggal >= '$tanggal_awal' AND tanggal <= '$tanggal_akhir' AND status_acc='Approved' AND status_absensi='izin'");
        		$total_izin = mysqli_num_rows($ambil_absensi_izin);
        		$ambil_absensi_cuti = $conn->query("SELECT * FROM absensi WHERE id_user='$id_user' AND tanggal >= '$tanggal_awal' AND tanggal <= '$tanggal_akhir' AND status_acc='Approved' AND status_absensi='cuti'");
        		$total_cuti = mysqli_num_rows($ambil_absensi_cuti);
        		$ambil_absensi_sakit = $conn->query("SELECT * FROM absensi WHERE id_user='$id_user' AND tanggal >= '$tanggal_awal' AND tanggal <= '$tanggal_akhir' AND status_acc='Approved' AND status_absensi='sakit'");
        		$total_sakit = mysqli_num_rows($ambil_absensi_sakit);
        		$kinerja = ($total_masuk / $jumlah_hari) * 100;
        		if ($kinerja >= 81 && $kinerja <= 100) {
            		$kinerja_huruf = "A";
        		} elseif ($kinerja >= 51 && $kinerja <= 80) {
            		$kinerja_huruf = "B";
        		} elseif ($kinerja >= 31 && $kinerja <= 50) {
            		$kinerja_huruf = "C";
        		} elseif ($kinerja >= 11 && $kinerja <= 30) {
            		$kinerja_huruf = "D";
        		} elseif ($kinerja >= 0 && $kinerja <= 10) {
            		$kinerja_huruf = "E";
        		}
        		echo '<tr class="tabel"> 
					<td>' . $i . '</td> 
					<td>' . $pegawai['nama_pegawai'] . '</td> 
					<td>' . $pegawai['divisi_pegawai'] . '</td>
					<td>' . $pegawai['jabatan_pegawai'] . '</td>
					<td>' . $kinerja_huruf . '</td>  
					</tr>';
        		$i++;
        	}
		?>
	</table>
    </div>
</body>
</html>