<?php
    $country_site = array();

    /* WLD Site Details for your countries */
    # 1. Add a hash '#' at the start of any $country_site you wish to NOT use.
    # 2. Enter the WLD Site ID for your countries in place of 0000.
    # 3. Enter the WLD Site URL (excluding http:// or https://) for your countries in place of app.example.com.

    $country_site["AU"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"app.example.com"); # Australia
    $country_site["CA"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"app.example.com"); # Canada
    $country_site["IE"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"app.example.com"); # Ireland
    $country_site["NZ"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"app.example.com"); # New Zealand
    $country_site["ZA"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"app.example.com"); # South Africa
    $country_site["GB"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"app.example.com"); # United Kingdom
    $country_site["US"] = array("WLD_SITE_ID"=>"0000", "WLD_SITE_URL"=>"app.example.com"); # United States

    # Set your default country code (if no suitable country can be found for a user)
    # options: AU, CA, IE, NZ, ZA, GB or US
    const DEFAULT_COUNTRY = "GB";



    ############# DON'T EDIT THIS LINE ##############
    define('COUNTRY_SITE', serialize($country_site));
    #################################################
?>
