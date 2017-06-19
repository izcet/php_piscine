<?php

function ft_is_sort($arr) {
	$input = $arr;
	sort($arr);

	foreach($arr as $key => $value) {
		if ($value != $default[$key])
			return (false);
	}
	return (true);
}

?>
