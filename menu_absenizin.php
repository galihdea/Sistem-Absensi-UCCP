<!DOCTYPE HTML>
<html>

<body>
    <?php include 'header.php'?>
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
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="selector1" class="col-sm-2 control-label" style="text-align:left;">Jenis
                                        Izin</label>
                                    <div class="col-sm-8">
                                        <select name="selector1" id="selector1" class="form-control1" onchange="pilihForm(this.value)">
                                            <option value="" disabled selected style="display:none;">---Pilih
                                                Jenis Izin---</option>
                                            <option value="sakit">SAKIT</option>
                                            <option value="cuti">CUTI</option>
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
											form_sakit.innerHTML='<div class="form-group"><label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Sakit</label><div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div></div>';
											break;
										case "cuti":
											form_sakit.innerHTML='';form_izin.innerHTML='';
											form_cuti.innerHTML='<div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Dari</label><div class="col-sm-8"><input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required=""></div></div><div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Sampai</label><div class="col-sm-8"><input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required=""></div></div>';
											break;
										case "izin":
											form_sakit.innerHTML='';form_cuti.innerHTML='';
											form_izin.innerHTML='<div class="form-group"><label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Izin</label><div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div></div>';
											break;
											}
										}
								</script>
                                <div id="form_sakit"></div>
                                <div id="form_cuti"></div>
                                <div id="form_izin"></div>
                            </form>
                            <div class="submit"><input type="submit" onclick="load_page()" value="Ajukan Izin"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//forms-inner-->
        </div>
        <!--//forms-->
    </div>
    <!--//outer-wp-->
    <!--footer section start-->
    <footer>
        <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
    </footer>
    <!--footer section end-->
    <?php include 'footer.php';?>
</body>

</html>