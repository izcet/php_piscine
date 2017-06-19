#!/usr/bin/php
<?php

unset($argv[0]);

if (isset($argv[1]))
{
	foreach ($argv as $arg) {
		$var = "$var" . " $arg";
	};

	$var = trim($var);
	$var = preg_replace('/\s+/', ' ', $var);

	$ret = explode(' ', $var);

	sort($ret, SORT_STRING);

	foreach ($ret as $value) {
		echo "$value\n";
	};
};

?>
