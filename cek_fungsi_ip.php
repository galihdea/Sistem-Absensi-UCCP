<?php
	include 'functions/koneksi.php';
	include 'functions/ip_check_function.php';

    $ip_address=$_SERVER['REMOTE_ADDR'];
    $ip_address=$_SERVER['HTTP_X_FORWARDED_FOR'];
    $ip_address=$_SERVER['HTTP_CLIENT_IP'];

    $ambilLah = ambilIP($ip_address);

    foreach($ambilLah as $key => $value)
	{
  		echo $key." punya nilai ". $value."<br />";
	}
?>