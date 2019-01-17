<!DOCTYPE HTML>
<html>

<body>
<?php include 'header.php';
	if ($_SESSION['jenis_user'] == "Pegawai"){
?>
    <!--/sub-heard-part-->
    <script>
        //Value untuk mengisi Home / ....
        let page_header="Absen Karyawan"
    </script>
    <!--/sub-heard-part-->
    <!--/tabs-->
    <div class="tab-main">
        <!--/tabs-inner-->
        <div class="tab-inner">
            <div id="tabs" class="tabs">

                <!-- masukkan kode di sini -->
                <div class="login login-pegawai">
                    <!-- <h3 class="inner-tittle t-inner">DAFTAR HADIR HARI INI</h3> -->

                    <div class="buttons login">
                    </div>
                    <form method="POST" action="functions/absen_masuk.php">
                        <input name="username" type="text" class="text" value="Masukkan id anda" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
                        <input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

                        <div class="submit"><input type="submit" onclick="load_page()" value="Hadir"></div>
                        <div class="clearfix"></div>

                    </form>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//tabs-inner-->
    </div>

<?php } include 'footer.php';?>
</body>

</html>