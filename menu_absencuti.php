<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/ok.ico" type="image/ico" />
</head>
<body>
<?php include 'header.php';
if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_cuti=='Boleh') {
    ?>
    <!--/sub-heard-part-->
    <script>
        //Value untuk mengisi Home / ....
        let page_header = "Pengajuan Cuti"
    </script>
    <!-- ALERT -->
    <?php if ($_SESSION['peringatan']!=""){?>
    <div class="alert1">
        <p class="alert-text"><?php echo $_SESSION['peringatan'];?></p>
    </div>
    <?php }?>
    <!--/forms-->
    <div class="forms-main">

        <!--/forms-inner-->
        <div class="forms-inner">

            <!--/set-2-->
            <div class="set-1">
                <div class="graph-2 general">
                    <h3 class="inner-tittle two">Pengajuan Cuti</h3>
                    <div class="grid-1">
                        <div class="form-body">
                            <form method="POST" action="functions/absen_izin.php" class="form-horizontal" role="form" data-toggle="validator">
                                <input name="izin" value="cuti" type="hidden">
                                <div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Dari</label>
                                    <div class="col-sm-8"><input name="keterangan_cuti_awal" id="date-01" type="date"
                                                                 class="form-control1 ng-invalid ng-invalid-required"
                                                                 ng-model="model.date"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Sampai</label>
                                    <div class="col-sm-8"><input name="keterangan_cuti_akhir" id="date-02" type="date"
                                                                 class="form-control1 ng-invalid ng-invalid-required"
                                                                 ng-model="model.date"></div>
                                </div>
                                <div class="form-group"><label for="txtarea1" class="col-sm-2 control-label"
                                                               style="text-align:left;">Keterangan Cuti</label>
                                    <div class="col-sm-8"><textarea name="keterangan_cuti_ket" id="txtarea1" cols="50"
                                                                    rows="4" class="form-control1" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn blue four bglblue hover" onclick="validate_date()">
                                        Ajukan Izin
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!--//forms-inner-->
        </div>
        <!--//forms-->
    </div>
    <!--//outer-wp-->
<?php }
include 'footer.php'; ?>
</body>

</html>