#!/usr/bin/php
<?php
	$exploded = explode(" ", $argv[1]);
	$stack = array_filter($exploded);
	echo implode(" ", $stack);
	echo "\n";
?>
