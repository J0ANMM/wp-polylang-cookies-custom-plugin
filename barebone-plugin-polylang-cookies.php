<?php

/*
* Plugin Name:      Polylang cookies settings
* Description:      Barebone plugin that sets Polylang's configuration for cookies
*/


/*
* Remove Polylang Cookie
*/
define( 'PLL_COOKIE', false );

/*
* Set the Polylang cookie to expiring at the end of the session
* (included as a fall-back configuration, in case the removal of cookies stops working)
*/
add_filter( 'pll_cookie_expiration', function() { return 0; } );
