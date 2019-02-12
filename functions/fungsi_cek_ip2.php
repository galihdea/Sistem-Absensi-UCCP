<?php
	
	/*function ambilIP($ip_address){
		$alamat_ambil = "http://www.geobytes.com/iplocator/?IpAddress=".$ip_address;
		$ambil = json_decode(file_get_contents($alamat_ambil));
		echo $ambil;
	}*/
	$serv = $_SERVER['REMOTE_ADDR'];

	$alamat_ambil = "http://www.geobytes.com/iplocator/?IpAddress=".$serv;
	
	$ambil = json_decode(file_get_contents($alamat_ambil));

	var_dump($ambil);
	
	//ambilIP($serv);
?>