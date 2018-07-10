#!/usr/bin/php
<?php
  if ($argc == 1)
    exit;
    else {
      $month_fr = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

  $arr = explode(" ", $argv[1]);
  if (count($arr) == 5) {
    $temp = [];
    $temp[0] = array_search(strtolower($arr[2]), array_map('strtolower', $month_fr)) + 1;
    $temp[1] = $arr[1];
    $temp[2] = $arr[3];
    $formated = implode ('/', $temp);
    $final = $formated .' '. $arr[4];
    $seconds = strtotime($final);
    print $seconds;
    echo "\n";
  }
  else {
    print "Wrong Format"."\n";
  }
}
?>
