#!/usr/bin/php
<?php
  if ($argc == 1)
    exit;
    else {
  $ro = preg_replace('/\s+/', ' ',$argv[1]);
  echo trim($ro);
  echo "\n";
}
?>
