<?php
    
date_default_timezone_set('Asia/Jakarta');
$jamasuk = date('l, d/m/y h:i:s');
$tanggal = date('l, d-m-Y');
$yearNow = date('Y');
$year = date('y');
$codexlaha = date('d/m/y-h:i');
    
// MENDAPATKAN ALAMAT IP PRIBADI SI TARGET
function getClientIP() {
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$ipaddress = getenv('REMOTE_ADDR');
else
$ipaddress = 'UNKNOWN';
return $ipaddress;
}

// MENGIRIM ALAMAT IP PRIBADI SI TARGET KE SERVER UNTUK DILACAK
$url = "https://api.ipapi.biz/api/?ip=".getClientIP();

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
		curl_close($curl);
$data = json_decode($resp,true);

// HASIL PELACAKAN ALAMAT IP PRIBADI SI TARGET
$arpantek_ipaddress = getClientIP();
$arpantek_flag = $data['flag01'];
$arpantek_flag1 = $data['flag'];
$arpantek_callcode = $data['code'];
$arpantek_code = $data['countryCode'];
$arpantek_continent = $data['continent'];
$arpantek_country = $data['country'];
$arpantek_region = $data['region'];
$arpantek_city = $data['city'];
$arpantek_latitude = $data['lat'];
$arpantek_longitude = $data['lon'];
$arpantek_provider = $data['isp'];
$jamasuk = $data['timezone'];
?>