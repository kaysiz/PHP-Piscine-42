#!/usr/bin/php
<?php
	$arr = [];
	for ($i = 1; $i < $argc; $i++)
	{
		$exploded = explode(" ", $argv[$i]);
			foreach ($exploded as $value)
				array_push($arr, $value);
	}
	$stack = array_filter($arr);
	sort($stack);
	foreach ($stack as $value)
		echo $value."\n";
?>
