<?php

function ft_split($arg_string) {

	$ret = explode(' ', $arg_string);
	foreach ($ret as $value) {
		$value = trim($value);
	};
	sort($ret, SORT_STRING);
	return ($ret);
}

?>
