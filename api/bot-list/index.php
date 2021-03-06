<?php

$bot_list = array();

function endsWith($haystack, $needle){
  $length = strlen($needle);
  return (substr($haystack, -$length) === $needle);
}

function getBots($dir){
  if (endsWith($dir, '/images')){
    return false;
  }
  global $bot_list;
  $ffs = scandir($dir);
  foreach($ffs as $ff){
    if($ff != '.' && $ff != '..'){
      if (!endsWith($ff, 'index.md') && endsWith($ff, '.md')){
        $bot_url =  $dir . '/' . $ff ;
        array_push($bot_list, '"' . substr($bot_url, 13, strlen($bot_url) - 16) . '"');
      }
      if (is_dir($dir.'/'.$ff)){
        getBots($dir.'/'.$ff);
      }
    }
  }
}

if (isset($_GET['filter'])){
  getBots('../../content/bots/' . $_GET['filter']);
}
else{
  getBots('../../content/bots');
}

header('Content-type: application/json');
echo '[' . implode(',', $bot_list) . ']';
