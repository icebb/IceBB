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

class timer
{

  var $timers = array();

  function start($name)
  {
    $starttime = microtime();
    $starttime = explode(' ',$starttime);
    $this->timers[$name] = $starttime[0] + $starttime[1];
  }
	
  function stop($name,$round=6)
  {
    $stoptime = microtime();
    $stoptime = explode(' ',$stoptime);
    $stoptime = $stoptime[0]+$stoptime[1];

    $totaltime = $stoptime-$this->timers[$name];
    $totaltime = round($totaltime,$round);
  
    return $totaltime;
  }

}

?>
