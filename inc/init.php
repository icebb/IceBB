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

//Disallow direct access to this file for security reasons
if (!defined('IN_ICEBB'))
{
  die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_ICEBB is defined.");
}

/* Defines the root directory for IceBB.

	Uncomment the below line and set the path manually
	if you experience problems.

	Always add a trailing slash to the end of the path.

	* Path to your copy of IceBB
 */
//define('ICEBB_ROOT', "./");

// Attempt autodetection
if(!defined('ICEBB_ROOT'))
{
  define('ICEBB_ROOT', dirname(dirname(__FILE__))."/");
}

define("TIME_NOW", time());

require_once ICEBB_ROOT.'inc/class_error.php';
$error_handler = new error_handler();

require_once ICEBB_ROOT.'inc/functions.php';

require_once ICEBB_ROOT.'inc/class_timer.php';
$timer = new timer();

//load Smarty
require_once ICEBB_ROOT.'inc/Smarty.class.php';
$smarty = new Smarty();

//set directories for smarty
$smarty->setTemplateDir(ICEBB_ROOT.'skins/');
$smarty->setCompileDir(ICEBB_ROOT.'skins_c/');
$smarty->setConfigDir(ICEBB_ROOT.'inc/');
$smarty->setCacheDir(ICEBB_ROOT.'cache/');

?>
