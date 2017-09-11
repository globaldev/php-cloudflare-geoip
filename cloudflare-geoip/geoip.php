<?php
/**
 * Geoip Script (utilizing Cloudflare variable)
 *
 *
 */
class Geoip
{
    /**
    * Determine country and initialise value set up.
    * @access public
    * @param string $geoip_country_code Country code from Cloudflare
    * @return void
    */
    public function country_check($geoip_country_code)
    {
        if ($geoip_country_code == 'AU' && defined('AUSTRALIA')) {
            $this->set_vars(AUSTRALIA, "AU", "Australia");
        } else if ($geoip_country_code == 'CA' && defined('CANADA')) {
            $this->set_vars(CANADA, "CA", "Canada");
        } else if ($geoip_country_code == 'IE' && defined('IRELAND')) {
            $this->set_vars(IRELAND, "IE", "Ireland");
        } else if ($geoip_country_code == 'NZ' && defined('NEW_ZEALAND')) {
            $this->set_vars(NEW_ZEALAND, "NZ", "New Zealand");
        } else if ($geoip_country_code == 'SA' && defined('SOUTH_AFRICA')) {
            $this->set_vars(SOUTH_AFRICA, "SA", "South Africa");
        } else if ($geoip_country_code == 'UK' && defined('UNITED_KINGDOM')) {
            $this->set_vars(UNITED_KINGDOM, "UK", "United Kingdom");
        } else if ($geoip_country_code == 'US' && defined('UNITED_STATES')) {
            $this->set_vars(UNITED_STATES, "US", "United States");
        } else {
            $this->set_vars(DEFAULT_COUNTRY, DEFAULT_COUNTRY_CODE, DEFAULT_COUNTRY_NAME);
        }
    }

    /**
    * Set constants for the country found (or not found).
    * @access public
    * @param array $country_details Site details applied from geoip.cnf.php
    * @return void
    */
    private function set_vars($site_details, $country_code, $country_name)
    {
        define("WLD_COUNTRY_CODE", $country_code);
        define("WLD_COUNTRY_NAME", $country_name);
        define("WLD_SITE_ID", $site_details["WLD_SITE_ID"]);
        define("WLD_SITE_URL", $site_details["WLD_SITE_URL"]);
    }
}
?>
