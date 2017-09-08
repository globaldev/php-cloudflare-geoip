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
        if ($geoip_country_code == 'AU' && AUSTRALIA_ENABLED == 'on') {
            $this->set_vars(AUSTRALIA);
        } else if ($geoip_country_code == 'CA' && CANADA_ENABLED == 'on'){
            $this->set_vars(CANADA);
        } else if ($geoip_country_code == 'IE' && IRELAND_ENABLED == 'on'){
            $this->set_vars(IRELAND);
        } else if ($geoip_country_code == 'NZ' && NEW_ZEALAND_ENABLED == 'on') {
            $this->set_vars(NEW_ZEALAND);
        } else if ($geoip_country_code == 'ZA' && SOUTH_AFRICA_ENABLED == 'on') {
            $this->set_vars(SOUTH_AFRICA);
        } else if ($geoip_country_code == 'GB' && UNITED_KINGDOM_ENABLED == 'on') {
            $this->set_vars(UNITED_KINGDOM);
        } else if ($geoip_country_code == 'US' && UNITED_STATES_ENABLED == 'on') {
            $this->set_vars(UNITED_STATES);
        } else {
            $this->set_vars(DEFAULT_COUNTRY);
        }
    }

    /**
    * Set constants for the country found (or not found).
    * @access public
    * @param array $country_details Site details applied from geoip.cnf.php
    * @return void
    */
    private function set_vars($country_details)
    {
        define("WLD_COUNTRY_CODE", $country_details[2]);
        define("WLD_COUNTRY_NAME", $country_details[3]);
        define("WLD_SITE_ID", $country_details[0]);
        define("WLD_SITE_URL", $country_details[1]);
    }
}
?>
