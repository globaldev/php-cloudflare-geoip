<?php
/* Country Toggle start */
    # Select the countries that you have WLD Sites for. 1 for on, 0 for off
    const AUSTRALIA_ENABLED         = 'on';
    const CANADA_ENABLED            = 'on';
    const IRELAND_ENABLED           = 'on';
    const NEW_ZEALAND_ENABLED       = 'on';
    const SOUTH_AFRICA_ENABLED      = 'on';
    const UNITED_KINGDOM_ENABLED    = 'on';
    const UNITED_STATES_ENABLED     = 'on';
/* Country Toggle end */

/* WLD Site Details for your countries */
    # Enter the WLD Site ID for your country in place of WLD_SITE_ID.
    # Enter the WLD Site URL for your country in place of WLD_SITE_URL.
    const AUSTRALIA         = array("WLD_SITE_ID", "WLD_SITE_URL", "AU", "Australia");
    const CANADA            = array("WLD_SITE_ID", "WLD_SITE_URL", "CA", "Canada");
    const IRELAND           = array("WLD_SITE_ID", "WLD_SITE_URL", "IE", "Ireland");
    const NEW_ZEALAND       = array("WLD_SITE_ID", "WLD_SITE_URL", "NZ", "New Zealand");
    const SOUTH_AFRICA      = array("WLD_SITE_ID", "WLD_SITE_URL", "SA", "South Africa");
    const UNITED_KINGDOM    = array("WLD_SITE_ID", "WLD_SITE_URL", "UK", "United Kingdom");
    const UNITED_STATES     = array("WLD_SITE_ID", "WLD_SITE_URL", "US", "United States");
/* WLD Site Details for your countries */

/* Default Country start */
    # Set the default country if none of the enabled countries above match the user's location.
    const DEFAULT_COUNTRY = UNITED_KINGDOM;
/* Default Country end */
?>
