<!--footer section start-->
<footer class="marginl-20">
    <p align="centre">&copy 2019 UCCP . All Rights Reserved</p>
</footer>
<!--footer section end-->
</div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->

<div class="sidebar-menu posfixed">
    <header class="logo" style="background-color: #00C6D7;">
        <a href="#" class="sidebar-icon" style="margin-left:5px;"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo">
        <img src="assets/logo/logo-uccp (178 x 554).png" height="35px">
            </span>
            <!--<img id="logo" src="" alt="Logo"/>-->
        </a>
    </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <!--/down-->
    <div class="down">
        <a href="menu_dashboard.php"><img width="100px" height="100px" src="<?php echo $gambar;?>"></a>
        <a href="menu_dashboard.php"><span class=" name-caret">
                <?php echo $nama;?></span></a>
        <p>
            <?php echo $_SESSION['jenis_user'];
                $id_us = $_SESSION['id_user'];
            ?>
        </p>
        <ul>
            <li><a onclick="load_page()" class="tooltips" href="form_profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
            <li><a onclick="load_page()" class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
        </ul>
    </div>
    <!--//down-->
    <div class="menu">
        <ul id="menu">
            <li><a onclick="load_page()" href="menu_dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <?php if ($_SESSION['jenis_user'] == "Super Admin"){?>
            <li><a onclick="load_page()" href="menu_kelolaadmin.php"><i class="fa fa-user"></i> <span>Kelola Admin</span></a></li>
            <?php }?>
            <?php if ($_SESSION['jenis_user'] == "Super Admin" || $_SESSION['jenis_user'] == "Admin"){?>
            <li><a onclick="load_page()" href="menu_kelolapegawai.php"><i class="fa fa-users"></i> <span>Kelola Pegawai</span></a></li>
            <li id="menu-academico"><a href="#"><i class="fa fa-book"></i> <span>Approve Absensi</span> <span
                        class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a onclick="load_page()" href="menu_cuti.php">Cuti</a></li>
                    <li id="menu-academico-boletim"><a onclick="load_page()" href="menu_izin.php">Izin</a></li>
                </ul>
            </li>
            <li><a onclick="load_page()" href="menu_lihatlog.php"><i class="fa fa-list-ul"></i> <span>Lihat Riwayat Absensi</span></a></li>
            <li><a onclick="load_page()" href="menu_lihatkinerja.php"><i class="fa fa-bars"></i> <span>Lihat Riwayat Kinerja</span></a></li>
            <?php } if ($_SESSION['jenis_user'] == "Pegawai"){?>
            <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span> Absensi</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
            <!-- absen_sakit_izin -->
            <?php } if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_absen == "Boleh"){?>
                    <li id="menu-academico-avaliacoes"><a onclick="load_page()" href="menu_absenkaryawan.php"> Masuk</a></li>
                    <li id="menu-academico-boletim"><a onclick="load_page()" href="menu_absenizin.php">Izin</a></li>
            <?php }else if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_absen == "Tidak"){?>
                    <li id="menu-academico-avaliacoes"><a style="cursor: no-drop;"> Masuk</a></li>
                    <li id="menu-academico-boletim"><a style="cursor: no-drop;">Izin</a></li>
            <!-- absen_cuti -->
			<?php } if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_cuti == "Boleh"){?>
                    <li id="menu-academico-avaliacoes"><a onclick="load_page()" href="menu_absencuti.php"> Cuti</a></li>
			<?php }else if ($_SESSION['jenis_user'] == "Pegawai" && $boleh_cuti == "Tidak"){?>
					<li id="menu-academico-avaliacoes"><a style="cursor: no-drop;"> Cuti</a></li>
            <!-- lihat_histori -->
			<?php } if ($_SESSION['jenis_user'] == "Pegawai"){?>
                    <li id="menu-academico-avaliacoes"><a onclick="load_page()" href="menu_historikaryawan.php">Lihat Histori</a></li>
                </ul>
                <?php }?>
            </li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
</div>
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({
                "position": "absolute"
            });
        } else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({
                    "position": "relative"
                });
            }, 400);
        }

        toggle = !toggle;
    });
	
	//var boleh_absen = <?php echo $boleh_absen;?>;
	//if (boleh_absen == "Boleh"){
	//	document.getElementById("demo").innerHTML = "Boleh";
	//}else if (boleh_absen == "Tidak"){
		//document.getElementById("demo").innerHTML = "Tidak";
	//}else{
		//document.getElementById("demo").innerHTML = "??";
	//}
</script>
<?php $_SESSION['peringatan']="";?>