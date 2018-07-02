#!/usr/bin/php
<?php
function ft_split($str) {
  $temp =  array_filter(explode(" ", $str));
  sort($temp);
  return $temp;
}
?>
