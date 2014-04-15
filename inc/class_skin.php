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

class skin
{

  var $output;
  var $loaded_templates = array();
  var $skin_id;
  var $rss_link = '';
  var $rss_links = array();
  var $header_extra;

  function load_skin($skin_id='')
  {
    global $icebb,$db,$error_handler;
  }

  function load_template($template)
  {
    global $icebb,$std,$smarty,$error_handler;
    
    //make sure the template exists
    if (file_exists("skins/{$this->skin_id}/{$template}.tpl"))
    {
      //load the template
      $smarty->display("skins/{$this->skin_id}/{$template}.tpl");
    }
    else
    {
      //throw new skin error    
    }

    $this->loaded_templates[] = $template;
  }
  

}

?>
