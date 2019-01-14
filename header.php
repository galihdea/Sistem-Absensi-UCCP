<!-- header-starts -->
<?php
	session_start();
	include 'functions/koneksi.php';
	//session_start();
	if (!isset($_SESSION['id_pegawai'])){
		header('Location: login.php');
	}
	$id = $_SESSION['id_pegawai'];
	if ($_SESSION['jenis_user'] == "Admin"){
		$ambilnama = $conn->query("SELECT * FROM admin WHERE id_admin='$id'");
		$ambil = $ambilnama->fetch_array();
		$nama = $ambil['nama_admin'];
	}else if ($_SESSION['jenis_user'] == "Super Admin"){
		$ambilnama = $conn->query("SELECT * FROM super_admin WHERE id_sadmin='$id'");
		$ambil = $ambilnama->fetch_array();
		$nama = $ambil['nama_sadmin'];
	}else if ($_SESSION['jenis_user'] == "Pegawai"){
		$ambilnama = $conn->query("SELECT * FROM pegawai WHERE id_pegawai='$id'");
		$ambil = $ambilnama->fetch_array();
		$nama = $ambil['nama_pegawai'];
	}
?>

    <head>
        <title>SAUCCP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        
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

        <!--Table-->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

        <!--//skycons-icons-->

        <!--js -->
        <link rel="stylesheet" href="css/vroom.css">
        <script type="text/javascript" src="js/vroom.js"></script>
        <script type="text/javascript" src="js/TweenLite.min.js"></script>
        <script type="text/javascript" src="js/CSSPlugin.min.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Tambahan CSS -->
        <link href="css/tambahan.css" rel='stylesheet' type='text/css' />
        <!-- CSS Loading -->
        <link href="css/css-loader.css" rel='stylesheet' type='text/css' />

    </head>
    <div class="page-container">
        <!-- Loading div -->
        <div class="loader loader-default is-active" id="load-page" data-text="Loading..." style="display:none;">
        </div>
        <!--/content-inner-->
        <div class="left-content">
            <div class="inner-content">
                <div class="header-section">
                    <!--menu-right-->
                    <div class="top_menu">
                        <div class="main-search">
                            <form>
                                <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text" />
                                <input type="submit" value="">
                            </form>
                            <div class="close"><img src="images/cross.png" /></div>
                        </div>
                        <!-- <div class="srch"><button></button></div> -->
                        <script type="text/javascript">
                            $('.main-search').hide();
                            $('button').click(function() {
                                $('.main-search').show();
                                $('.main-search text').focus();
                            });
                            $('.close').click(function() {
                                $('.main-search').hide();
                            });
                        </script>
                        <!--/profile_details-->
                        <div class="profile_details_left">
                            <ul class="nofitications-dropdown">
                                <li class="dropdown note dra-down">
                                    <script type="text/javascript">
                                        function DropDown(el) {
                                            this.dd = el;
                                            this.placeholder = this.dd.children('span');
                                            this.opts = this.dd.find('ul.dropdown > li');
                                            this.val = '';
                                            this.index = -1;
                                            this.initEvents();
                                        }
                                        DropDown.prototype = {
                                            initEvents: function() {
                                                var obj = this;

                                                obj.dd.on('click', function(event) {
                                                    $(this).toggleClass('active');
                                                    return false;
                                                });

                                                obj.opts.on('click', function() {
                                                    var opt = $(this);
                                                    obj.val = opt.text();
                                                    obj.index = opt.index();
                                                    obj.placeholder.text(obj.val);
                                                });
                                            },
                                            getValue: function() {
                                                return this.val;
                                            },
                                            getIndex: function() {
                                                return this.index;
                                            }
                                        }

                                        $(function() {

                                            var dd = new DropDown($('#dd'));

                                            $(document).click(function() {
                                                // all dropdowns
                                                $('.wrapper-dropdown-3').removeClass('active');
                                            });

                                        });
                                    </script>
                                </li>
                            <!--     <li class="dropdown note">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-envelope-o"></i> <span class="badge">3</span></a>
                                    <ul class="dropdown-menu two first">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new messages </h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user_img"><img src="images/1.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="odd">
                                            <a href="#">
                                                <div class="user_img"><img src="images/in.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user_img"><img src="images/in1.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all messages</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li> -->


                               <!--  <li class="dropdown note">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
                                    <ul class="dropdown-menu two">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 9 pending task</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar yellow" style="width:40%;"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="progress progress-striped active">
                                                    <div class="bar green" style="width:90%;"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar red" style="width: 33%;"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar  blue" style="width: 80%;"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all pending task</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- ini yang diubah biar cuma 3 notifikasi aja --> 
                                <li class="dropdown note" style="margin-left:200px;">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-bell-o"></i> <span class="badge">5</span></a>

                                    <ul class="dropdown-menu two" style="height:300px;" >
                                        <li>
                                            <div class="notification_header" >
                                                <h3>You have 5 new notification</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user_img"><img src="images/in.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="odd">
                                            <a href="#">
                                                <div class="user_img"><img src="images/in5.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all notification</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <!--//profile_details-->
                    </div>
                    <!--//menu-right-->
                    <div class="clearfix"></div>
                </div>
                <!-- //header-ends -->
                <div class="outter-wp margin25-10">
                    <div class="sub-heard-part" style="font-size:20px;">
                        <ol class="breadcrumb m-b-0" style="padding: 0px 0px;">
                            <li><a href="menu_dashboard.php">Home</a></li>
                            <li class="active" id="menu-header"></li>
                        </ol>
                        <hr>
                    </div>
                    <!-- Penutup div outter wp berada di page masing-masing -->
                    <script>
                        $(document).ready(function() {
                            let menu_header = document.getElementById('menu-header');
                            //let sub_title = document.getElementsByClassName('inner-tittle').innerHTML;
                            //alert(sub_title);
                            menu_header.innerHTML = page_header;
                        });
                        function load_page() {
                            document.getElementById("load-page").style.display = "block";
                        }
                    </script>