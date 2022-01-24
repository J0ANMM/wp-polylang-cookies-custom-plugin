<?php

/*
* Plugin Name:      Polylang cookies settings
* Description:      Barebone custom plugin that sets Polylang's configuration for cookies
*/


/*
* Remove Polylang Cookie
* (delete this part if you just want to change the expiration of the cookies)
*/
define( 'PLL_COOKIE', false );

/*
* Set the Polylang cookie to expiring at the end of the session.
* By default it is set to 1 year.
* (This is included as a fall-back configuration, in case the removal of cookies stops working)
*/
add_filter( 'pll_cookie_expiration', function() { return 0; } );
