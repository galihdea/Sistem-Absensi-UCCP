<!DOCTYPE HTML>
<html>

<body>
<?php include 'header.php';
	if ($_SESSION['jenis_user'] == "Pegawai"){
?>
    <!--/sub-heard-part-->
    <script>
        //Value untuk mengisi Home / ....
        let page_header="Pengajuan Cuti"
    </script>
    <!--/sub-heard-part-->
    <!--/sub-heard-part-->
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
                            <form method="POST" action="functions/absen_izin.php" class="form-horizontal">
                                <div class="form-group">
                                    <label for="selector1" class="col-sm-2 control-label" style="text-align:left;">Jenis Izin</label>
                                    <label for="selector1" class="col-sm-8 control-label" style="text-align:left;">Cuti</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;">Dari</label>
                                    <div class="col-sm-8">
                                        <input name="keterangan_cuti_awal" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" style="text-align:left;">Sampai</label>
                                    <div class="col-sm-8"><input name="keterangan_cuti_akhir" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required=""></div>
                                </div>
                                <div class="form-group">
                                    <label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Cuti</label>
                                    <div class="col-sm-8"><textarea name="keterangan_cuti_ket" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
                                </div>
                                
                                <div class="submit"><input type="submit" onclick="load_page()" value="Ajukan Izin"></div>
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
    <?php } include 'footer.php';?>
</body>

</html>