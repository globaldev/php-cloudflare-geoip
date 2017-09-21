<?php
/**
 * Geoip Script (utilizing Cloudflare variable)
 *
 *
 */
require 'geoip.config.php';

class Geoip
{

    private $country_names = array(
        "AU" => array("AU" => "Australia"),
        "CA" => array("CA", "Canada"),
        "IE" => array("IE", "Ireland"),
        "NZ" => array("NZ", "New Zealand"),
        "ZA" => array("SA", "South Africa"),
        "GB" => array("UK", "United Kingdom"),
        "US" => array("US", "United States")
    );

    private $country_site;

    public function __construct() {
        $this->country_site = unserialize(COUNTRY_SITE);
    }


    /**
    * Determine country and initialise value set up.
    * @access public
    * @param string $geoip_country_code Country code from Cloudflare
    * @return void
    */
    public function country_check()
    {
        if (!defined('DEFAULT_COUNTRY')) {
            const DEFAULT_COUNTRY = "GB";
        }

        $geoip_country_code = (isset($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"] : DEFAULT_COUNTRY);

        if (isset($this->country_site[$geoip_country_code])) {
            $this->set_vars($this->country_site[$geoip_country_code], $geoip_country_code);
        } else if (isset($this->country_site[DEFAULT_COUNTRY])) {
            # site settings for this country code don't exist, use the default site
            $this->set_vars($this->country_site[DEFAULT_COUNTRY], DEFAULT_COUNTRY);
        } else {
            # no default set, use the first item in the site list
            $this->set_vars(reset($this->country_site), key($this->country_site));
        }
    }

    /**
    * Set constants for the country found (or not found).
    * @access public
    * @param array $site_details Site details applied from geoip.cnf.php
    * @param array $country_code Country details applied from geoip.cnf.php
    * @return void
    */
    public function set_vars($site_details, $country_code)
    {
        define("WLD_COUNTRY_CODE", $this->country_names[$country_code][0]);
        define("WLD_COUNTRY_NAME", $this->country_names[$country_code][1]);
        define("WLD_SITE_ID", $site_details["WLD_SITE_ID"]);
        define("WLD_SITE_URL", $site_details["WLD_SITE_URL"]);
        define("WLD_SSL_APP_URL", "https://secure2.whitelabeldating.com");
        define("WLD_STANDARD_SIGNUP_FORM", "http://" . WLD_SITE_URL . "/signup.cfm");
        define("WLD_SSL_SIGNUP_FORM", WLD_SSL_APP_URL . "/signup.cfm?wldsite=" . WLD_SITE_ID);
    }
}
?>
