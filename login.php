<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
<link rel="icon" href="images/ok.ico" type="image/ico" />
    <title>LOGIN | UCCP</title>
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
        //Fungsi loading!
        function load_page() {
            document.getElementById("load-page").style.display = "block";
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
    <!--clock init-->
    <!-- CSS Loading -->
    <link href="css/css-loader.css" rel='stylesheet' type='text/css' />
</head>

<body style="background-image:url(assets/images/blue-background.png);">
<div class="loader loader-default is-active" id="load-page" data-text="Loading..." style="display:none;">
        </div>
    <!--/login-->

    <div class="error_page" style="background-image:url(assets/images/blue-background.png);">


        <div class="error-top">
            <!-- <h2 class="inner-tittle page"></h2> -->
            <div class="login">
                <h3 class="inner-tittle t-inner"> <img src="assets/logo/Logo UCCP 2 (800x800).png" height="60px"></h3>
                <form action="functions/login.php" method="POST">
                    <input name="username" type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
                    <input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                    <div class="submit"><input type="submit" value="Login" onclick="load_page()"></div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>

        <!--//login-top-->
    </div>

    <!--//login-->
    <!--footer section start-->
    <div class="footer">
        <p> <a href="https://w3layouts.com/" target="_blank"></a></p>
    </div>
    <!--footer section end-->
    <!--/404-->
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>