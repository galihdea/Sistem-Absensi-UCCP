<!DOCTYPE HTML>
<html>
<body>
<?php include 'header.php';
if ($_SESSION['jenis_user'] == "Super Admin" || $_SESSION['jenis_user'] == "Admin") {
    if (isset($_POST['submit'])) {
        $tanggal_awal = $_POST['tanggal1'];
        $tanggal_akhir = $_POST['tanggal2'];
        $jumlah_hari = $_POST['hari'];
    }
    ?>
    <script>
        //Value untuk mengisi Home / ....
        let page_header = "Riwayat Kinerja"
    </script>
    <!--custom-widgets-->
    <h3 class="inner-tittle two" style="margin-bottom:5px;"><i class="fa fa-list-ul"></i> &nbsp Riwayat Kinerja</h3>
    <div class="container">
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Filter
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Filter</h4>

                    </div>

                    <!-- Modal body -->
                    <form method="POST" action="/Sistem-Absensi-UCCP/menu_lihatkinerja.php" class="form-horizontal">
                        <div class="form-group" style="
                            margin-top: 15px;
                            margin-left: 15px;
                            margin-right: 15px;
                        ">
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri" style="
                                padding-top: 0px;
                                ">Dari</label>
                            <div class="col-sm-9">
                                <input name="tanggal1" type="date" class="form-control1" id="focusedinput"
                                       placeholder="tanggal" style="
                                       margin-left: 0px;
                                       ">
                            </div>
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri" style="
                                padding-top: 0px;
                                ">Sampai</label>
                            <div class="col-sm-9">
                                <input name="tanggal2" type="date" class="form-control1" id="focusedinput"
                                       placeholder="tanggal">
                            </div>
                            <label for="focusedinput" class="col-sm-2 control-label ratakiri" style="
                                padding-top: 0px;
                                padding-right: 0px;
                                padding-left: 15px;
                                left: -5;
                                margin-left: -5;
                                right: -2;
                                right: -6;
                                margin-top: 0px;
                                ">Jumlah Hari</label>
                            <div class="col-sm-9" style="
                                left: 0px;
                                ">
                                <input name="hari" type="number" class="form-control1" id="focusedinput"
                                       placeholder="jumlah hari (hari kerja)" required="">
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
    <div style="margin-top:20px;">
        <table id="example" class="table table-striped table-bordered" style="width:100%; font-size: 15px;">
            <thead>
            <tr>
                <th class="headerno">No</th>
                <th class="header">Nama Pegawai</th>
                <th class="header">Divisi</th>
                <th class="header">Jabatan</th>
                <th class="header">Kinerja</th>
            </tr>
            </thead>
            <tbody>
            <?php
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
						<td class="notabel" style="padding: 5px 15px 5px 15px !important; border-bottom-width: 2px !important;" scope="row">' . $i . '</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">' . $pegawai['nama_pegawai'] . '</td> 
						<td class="isitabel" style="padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">' . $pegawai['divisi_pegawai'] . '</td>
						<td align="center" class="isitabel" style="max-width: 10px; padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">
							' . $pegawai['jabatan_pegawai'] . '</td>
						<td align="center" class="isitabel" style="max-width: 10px; padding: 5px 5px 5px 15px !important; border-bottom-width: 2px !important;">
							' . $kinerja_huruf . '</td>  
					</tr>';
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>
<?php }
include 'footer.php'; ?>
</body>
</html>