<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard Karyawan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<?php include 'header.php'; ?>
					<!-- //header-ends -->
						<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="karyawan.php">Home</a></li>
															<li class="active">Izin</li>
														</ol>
											</div>	
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
																											<label for="selector1" class="col-sm-2 control-label" style="text-align:left;">Jenis Izin</label>
																											<div class="col-sm-8">
																												<select name="selector1" id="selector1" class="form-control1" onchange="pilihForm(this.value)">
																												<option value="" disabled selected style="display:none;">---Pilih Jenis Izin---</option>
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
																												//form_after.innerHTML='';
																												switch(form_param){
																													case "sakit":
																														form_izin.innerHTML='';form_cuti.innerHTML='';
																														//form_after.innerHTML='';
																														form_sakit.innerHTML='<div class="form-group"><label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Sakit</label><div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div></div>';
																														break;
																													case "cuti":
																														form_sakit.innerHTML='';form_izin.innerHTML='';
																														form_cuti.innerHTML='<div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Dari</label><div class="col-sm-8"><input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required=""></div></div><div class="form-group"><label class="col-sm-2 control-label" style="text-align:left;">Sampai</label><div class="col-sm-8"><input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required=""></div></div>';
																														break;
																													case "izin":
																														form_sakit.innerHTML='';form_cuti.innerHTML='';
																														//form_after.innerHTML='';
																														form_izin.innerHTML='<div class="form-group"><label for="txtarea1" class="col-sm-2 control-label" style="text-align:left;">Keterangan Izin</label><div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div></div>';
																														break;
																												}

																											}
																										</script>
																										<div id="form_sakit"></div>
																										<div id="form_cuti"></div>
																										<div id="form_izin"></div>
																									
																									</form>
																								</form>
																								<div class="submit"><input type="submit" onclick="myFunction()" value="Ajukan Izin" ></div>
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
															 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include 'footer.php';?>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>