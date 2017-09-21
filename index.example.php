<?php
require 'cloudflare-geoip/geoip.php';
$geoip = new Geoip();
$geoip->country_check();
?>
