#!/usr/bin/php
<?php
if ($argc > 1) {
  $temp = $argv[1];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $temp);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$x = curl_exec($ch);

	preg_match_all("<img.+src=\"(.+?)\".+>", $x, $matches);
	$i = 0;
	$dir = parse_url($temp, PHP_URL_HOST);
	mkdir($dir);
	while ($i < count($matches[1]))
	{
		curl_setopt($ch, CURLOPT_URL, $matches[1][$i]);
		$x = curl_exec($ch);

		$file = substr($matches[1][$i], strrpos($matches[1][$i], "/") + 1);
		file_put_contents($dir . DIRECTORY_SEPARATOR . $file, $x);
		$i++;
	}
	curl_close($ch);
}
?>
