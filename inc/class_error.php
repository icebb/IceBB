<?php
/**
 *
 * IceBB 1.0
 * Copyright (c) 2014 XAOS Interactive
 *
 * Website: http://icebb.github.io
 * License: http://icebb.github.io/about/license
 *
 */

// Set to 1 if recieving a blank page (skin failure).
define('MANUAL_WARNINGS', 0);
 
// Define Custom IceBB error handler constants with a value not used by php's error handler.
define('ICEBB_SQL', 20);
define('ICEBB_SKIN', 30);
define('ICEBB_GENERAL', 40);
define('ICEBB_NOT_INSTALLED', 41);
define('ICEBB_NOT_UPGRADED', 42);

class error_handler
{

}

?>
