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

define('PATH_TO_ICEBB'			, '');
require(PATH_TO_ICEBB.'icebb.php');
$icebb_instance					= new icebb();
$icebb_instance->path_to_icebb	= '';
$icebb_instance->url_to_icebb	= '';
$icebb_instance->init();
//echo $icebb->output;
?>
