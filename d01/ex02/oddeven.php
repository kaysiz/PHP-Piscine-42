#!/usr/bin/php
<?php
$handle = fopen ("php://stdin","r");
while ($handle && !feof($handle)) {
echo "Enter a number: ";
$line = fgets($handle);
if($line)
{
$line = str_replace("\n", "", "$line");
if(is_numeric($line)) {
  if ($line % 2 == 0)
      echo "The number $line is even\n";
  else
      echo "The number $line is odd\n";
}
else
  echo "'$line' is not a number\n";
}
}
fclose($handle);
?>
