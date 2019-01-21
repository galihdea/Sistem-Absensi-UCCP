<?php
	
	function ambilIP($ip_address){
		$alamat_ambil = "http://api.ipstack.com/".$ip_address."?access_key=69e537e14e9cc6ebdfe23c03cd700118";
		$ambil = json_decode($alamat_ambil);
		return $ambil;
	}
	
?>