#!/usr/bin/php
<?php
if ($argc != 1) {
    $temp = explode(" ", $argv[1]);
    $stack = array_filter($temp);
    $word = $stack[0];
    $stack = array_splice($stack, 1);
    foreach ($stack as $value)
      echo $value." ";
    echo $word."\n";
}
else
    return;
?>
