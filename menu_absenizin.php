<!DOCTYPE HTML>
<html>

<body>
<?php include 'header.php';
	if ($_SESSION['jenis_user'] == "Pegawai"){
?>
    <!--/sub-heard-part-->
    <script>
        //Value untuk mengisi Home / ....
        let page_header="Pengajuan Izin"
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
                    <h3 class="inner-tittle two">Pengajuan Izin</h3>
                    <div class="grid-1">
                        <div class="form-body">
                            <form method="POST" action="functions/absen_izin.php" class="form-horizontal">
                                <div class="form-group">
                                    <label for="selector1" class="col-sm-2 control-label" style="text-align:left;">Jenis
                                        Izin</label>
                                    <div class="col-sm-8">
                                        <select name="izin" id="selector1" class="form-control1" onchange="pilihForm(this.value)">
                                            <option value="" disabled selected style="">---Pilih
                                                Jenis Izin---</option>
                                            <option value="sakit">SAKIT</option>
                                            <!-- <option value="cuti">CUTI</option> -->
                                            <option value="izin">IZIN</option>
                                        </select></div>
                                </div>
                                <script>
                                    function pilihForm(form_param){
                                        let form_sakit = document.getElementById("form_sakit");
										let form_cuti = document.getElementById("form_cuti");
										let form_izin = document.getElementById("form_izin");
										switch(form_param){
										case "sakit":
										    form_izin.innerHTML='';form_cuti.innerHTML='';
											form_sakit.innerHTML='<div class="form-group"><label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Sakit</label><div class="col-sm-8"><textarea name="keterangan_sakit" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div></div><div class="form-group"><button type="submit" class="btn blue four bglblue hover">Ajukan Izin</button></div>';
											break;
										case "cuti":
											form_sakit.innerHTML='';form_izin.innerHTML='';
											form_cuti.innerHTML='<div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Dari</label><div class="col-sm-8"><input name="keterangan_cuti_awal" id="date-01" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date"></div></div><div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Sampai</label><div class="col-sm-8"><input name="keterangan_cuti_akhir" id="date-02" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date"></div></div><div class="form-group"><label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Cuti</label><div class="col-sm-8"><textarea name="keterangan_cuti_ket" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div></div><div class="form-group"><button type="submit" class="btn blue four bglblue hover" onclick="validate_date()">Ajukan Izin</button></div>';
											break;
										case "izin":
											form_sakit.innerHTML='';form_cuti.innerHTML='';
											form_izin.innerHTML='<div class="form-group"><label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Izin</label><div class="col-sm-8"><textarea name="keterangan_izin" id="txtarea1" cols="50" rows="4" class="form-control1" required></textarea></div></div><div class="form-group"><button type="submit" class="btn blue four bglblue hover">Ajukan Izin</button></div>';
											break;
											}
										}
								</script>
                                <div id="form_sakit"></div>
                                <div id="form_cuti"></div>
                                <div id="form_izin"></div>
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