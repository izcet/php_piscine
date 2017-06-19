#!/usr/bin/php
<?php

$var = $argv[1];
if (isset($var))
{
	$var = trim($var);
	$var = preg_replace('/\s+/', ' ', $var);

	if ($var != "")
		echo "$var\n";
}
?>
