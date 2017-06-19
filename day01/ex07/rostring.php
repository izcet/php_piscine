#!/usr/bin/php
<?php

$var = $argv[1];

$var = trim($var);
$var = preg_replace('/\s+/', ' ', $var);
$nvar = explode(' ', $var);

$first = false;

foreach ($nvar as $s) {
	if ($first == true) {
		$str = "$str" . " $s";
	}
	$first = true;
}
$str = "$str" . " $nvar[0]";

echo trim($str) . "\n";

?>
