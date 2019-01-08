<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Tabs &amp; Panels :: w3layouts</title>
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
    <script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
    <!--clock init-->
</head>

<body>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="inner-content">
                <!-- header-starts -->
                <div class="header-section">
                    <!--menu-right-->
                    <div class="top_menu">
                        <div class="main-search">
                            <form>
                                <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}"
                                    class="text" />
                                <input type="submit" value="" />
                            </form>
                            <div class="close"><img src="images/cross.png" /></div>
                        </div>
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

                                <li class="dropdown note">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-envelope-o"></i> <span class="badge">3</span></a>


                                    <ul class="dropdown-menu two first">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new messages </h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/1.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/in.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/in1.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all messages</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown note">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-bell-o"></i> <span class="badge">5</span></a>

                                    <ul class="dropdown-menu two">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 5 new notification</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/in.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/in5.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all notification</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown note">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
                                    <ul class="dropdown-menu two">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 9 pending task</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar yellow" style="width:40%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="progress progress-striped active">
                                                    <div class="bar green" style="width:90%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar red" style="width: 33%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar  blue" style="width: 80%;"></div>
                                                </div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all pending task</a>
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
                <!--//outer-wp-->
                <div class="outter-wp">
                    <!--/sub-heard-part-->
                    <div class="sub-heard-part">
                        <ol class="breadcrumb m-b-0">
                            <li><a href="#">Home</a></li>
                            <li class="active"> Riwayat Hadir</li>
                        </ol>
                    </div>
                    <!--/sub-heard-part-->
                    <!--/tabs-->
                </div>

                <!--/tabs-inner-->
                <!-- 	<div class="tab-inner">
											      <div id="tabs" class="tabs">
											 -->
                <!-- masukkan kode di sini -->


                <div id="tabs" class="tabs">
                    <h2 class="inner-tittle" style="text-align:center;">Histori Absen</h2>
                    <div class="graph">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID USER</th>
                                    <th>TIME</th>
                                    <th>STATUS</th>
                                    <th>LOKASI</th>
                                    <th>KETERANGAN</th>
                                    <th>ACC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>001</th>
                                    <th>07:01:2019:11:02AM</th>
                                    <th>HADIR</th>
                                    <th>JL. Imam bonjol no 7</th>
                                    <th>Hadir</th>
                                    <th>YES</th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>002</th>
                                    <th>07:01:2019:11:03AM</th>
                                    <th>SAKIT</th>
                                    <th>JL. umar bonjol no 1</th>
                                    <th>Tidak enak badan</th>
                                    <th>NO</th>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <th>003</th>
                                    <th>07:01:2019:00:03PM</th>
                                    <th>IZIN</th>
                                    <th>JL. teuke bonjol no 1</th>
                                    <th>IZIN PERGI</th>
                                    <th>YES</th>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /content -->
                    </div>
                    <!-- /tabs -->

                </div>
                <nav align="center">
                    <ul class="pagination">
                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>


                <!--footer section start-->
                <footer>
                    <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
                </footer>
                <!--footer section end-->
            </div>

            <!--//content-inner-->
            <!--/sidebar-menu-->
            <div class="sidebar-menu">
                <header class="logo">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="karyawan.php">
                        <span id="logo">
                            <h1>Augment</h1>
                        </span>
                        <!--<img id="logo" src="" alt="Logo"/>-->
                    </a>
                </header>
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
                <!--/down-->
                <div class="down">
                    <a href="karyawan.php"><img src="images/admin.jpg"></a>
                    <a href="karyawan.php"><span class=" name-caret">Jasmin Leo</span></a>
                    <p>System Administrator in Company</p>
                    <ul>
                        <li><a class="tooltips" href="karyawan.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
                    </ul>
                </div>
                <!--//down-->
                <div class="menu">
                    <ul id="menu">
                        <li><a href="karyawan.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
                        <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span> Absensi</span> <span
                                    class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub">
                                <li id="menu-academico-avaliacoes"><a href="absenkaryawan.php"> Masuk</a></li>
                                <li id="menu-academico-boletim"><a href="izin.php">Izin</a></li>
                                <li id="menu-academico-avaliacoes"><a href="histori.php">Lihat Histori</a></li>

                            </ul>
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
        </script>
        <!--js -->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
</body>

</html>