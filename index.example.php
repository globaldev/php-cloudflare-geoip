<?php
require 'cloudflare-geoip/geoip.php';
$geoip = new Geoip();
$country = (isset($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"] : "GB");
$geoip->country_check($country);
?>
