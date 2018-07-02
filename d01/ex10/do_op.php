#!/usr/bin/php
<?php
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return ;
}
$arr = array(trim($argv[1]),trim($argv[2]),trim($argv[3]));
if ($arr[1] == "%")
	$temp = $arr[0] % $arr[2];
else if ($arr[1] == "+")
	$temp = $arr[0] + $arr[2];
else if ($arr[1] == "*")
	$temp = $arr[0] * $arr[2];
else if ($arr[1] == "-")
	$temp = $arr[0] - $arr[2];
else if ($arr[1] == "/")
	$temp = $arr[0] / $arr[2];
else
	return ;
echo $temp."\n";
?>
