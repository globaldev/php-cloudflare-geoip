<?php
require_once("cloudflare-geoip/geoip.config.php");

if (file_exists("cloudflare-geoip/geoip.php")) {
	include "cloudflare-geoip/geoip.php";
	$geoip = new Geoip();
	$country = (isset($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"] : "GB");
	$geoip->country_check($country);
	define("WLD_SITE_URL", "http://" . APP_URL);
} else {
	define("WLD_SITE_ID", DEFAULT_COUNTRY['WLD_SITE_ID']);
	define("WLD_SITE_URL", "http://" . DEFAULT_COUNTRY['WLD_SITE_URL']);
	define("WLD_COUNTRY_CODE", DEFAULT_COUNTRY_CODE);
	define("WLD_COUNTRY_NAME", DEFAULT_COUNTRY_NAME);
}

define("WLD_SSL_APP_URL", "https://secure2.whitelabeldating.com");
define("WLD_STANDARD_SIGNUP_FORM", WLD_SITE_URL . "/signup.cfm");
define("WLD_SSL_SIGNUP_FORM", WLD_SSL_APP_URL . "/signup.cfm?wldsite=" . WLD_SITE_ID);
?>
