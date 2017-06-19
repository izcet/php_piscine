#!/usr/bin/php
<?php

$going = true;

while ($going)
{
	echo "Enter a number: ";
	$var = fgets(STDIN);
	if ($var != false)
	{
		$var = trim($var);
		if (is_numeric($var))
		{
			$newvar = (float)$var;
			while (fmod($newvar, 1.0) != 0.0)
			{
				$newvar *= 10.0;
			};
			if ($newvar % 2.0 == 0.0)
				echo "The number $var is even";
			else
				echo "The number $var is odd";
		}
		else
			echo "'$var' is not a number";
	}
	else
		$going = false;
	echo "\n";
}

?>
