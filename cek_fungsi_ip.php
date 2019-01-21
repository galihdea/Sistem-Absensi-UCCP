<?php
	include 'functions/koneksi.php';
	include 'functions/ip_check_function.php';

	if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip_address=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip_address=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip_address=$_SERVER['REMOTE_ADDR'];
    }

    $ambilLah = ambilIP($ip_address);

    foreach($ambilLah as $key => $value)
	{
  		echo $key." punya nilai ". $value."<br />";
	}
?>