<?php
require 'cloudflare-geoip/geoip.php';
$geoip = new Geoip();
$geoip->country_check(isset($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"] : "GB");

define("WLD_SSL_APP_URL", "https://secure2.whitelabeldating.com");
define("WLD_STANDARD_SIGNUP_FORM", 'http://' . WLD_SITE_URL . "/signup.cfm");
define("WLD_SSL_SIGNUP_FORM", WLD_SSL_APP_URL . "/signup.cfm?wldsite=" . WLD_SITE_ID);
?>
