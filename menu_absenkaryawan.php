<!DOCTYPE HTML>
<html>

<body>
    <?php include 'header.php'?>
    <!--/sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="#">Home</a></li>
            <li class="active"> Absen Karyawan</li>
        </ol>
    </div>
    <!--/sub-heard-part-->
    <!--/tabs-->
    <div class="tab-main">
        <!--/tabs-inner-->
        <div class="tab-inner">
            <div id="tabs" class="tabs">

                <!-- masukkan kode di sini -->
                <div class="login">
                    <!-- <h3 class="inner-tittle t-inner">DAFTAR HADIR HARI INI</h3> -->

                    <div class="buttons login">
                    </div>
                    <form>
                        <input type="text" class="text" value="Masukkan id anda" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

                        <div class="submit"><input type="submit" onclick="myFunction()" value="Hadir"></div>
                        <div class="clearfix"></div>

                    </form>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//tabs-inner-->
    </div>

    <?php include 'footer.php';?>
</body>

</html>