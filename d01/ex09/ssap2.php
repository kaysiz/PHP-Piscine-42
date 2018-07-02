#!/usr/bin/php
<?php
function ft_split($str) {
  $temp =  array_filter(explode(" ", $str));
  sort($temp);
  return $temp;
}
?>
<?php
function ft_cmp_val($str1, $str2)
{
	for ($i = 0; $i < strlen($str1) + 1; $i++)
		if (strcasecmp($str1[$i],$str2[$i]))
			break;
	if ($i == strlen($str1) + 1 && $i == strlen($str2) + 1)
		return 0;
	$val1 = $str1[$i];
	$val2 = $str2[$i];
	if (ctype_alpha($val1))
	{
		if (ctype_alpha($val2))
			return strcasecmp($val1, $val2);
		else
			return (-1);
	}
	else if (ctype_digit($val1))
	{
		if (ctype_digit($val2))
			return $val1 - $val2;
		else if (ctype_alpha($val2))
			return (1);
		else
			return (-1);
	}
	else
	{
		if (ctype_digit($val2) || ctype_alpha($val2))
			return (1);
		else
			return strcmp($val1, $val2);
	}
}
?>
<?php
if ($argc == 1)
	return ;
$my_array =  ft_split($argv[1]);
for ($i = 2; $i < $argc; $i++)
	$my_array = array_merge($my_array, ft_split($argv[$i]));
usort($my_array, "ft_cmp_val");
foreach($my_array as $elem)
	echo "$elem\n";
?>
