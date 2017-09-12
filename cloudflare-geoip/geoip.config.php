<?php
    $country_site = array();

    /* WLD Site Details for your countries */
    # 1. Uncomment the country to enable it removing '#' from the start.
    # 2. Enter the WLD Site ID for your country in place of 0000.
    # 3. Enter the WLD Site URL for your country in place of premium.whitelabeldating.com.

    $country_site["AU"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"premium.whitelabeldating.com"); # Australia
    $country_site["CA"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"premium.whitelabeldating.com"); # Canada
    $country_site["IE"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"premium.whitelabeldating.com"); # Ireland
    $country_site["NZ"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"premium.whitelabeldating.com"); # New Zealand
    $country_site["SA"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"premium.whitelabeldating.com"); # South Africa
    $country_site["UK"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"premium.whitelabeldating.com"); # United Kingdom
    $country_site["US"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"premium.whitelabeldating.com"); # United States

    # Set your default country code
    # options: AU, CA, IE, NZ, SA, UK or US
    const DEFAULT_COUNTRY = "UK";



    ############# DON'T EDIT THIS LINE ##############
    define('COUNTRY_SITE', serialize($country_site));
    #################################################
?>
