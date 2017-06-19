#!/usr/bin/php
<?php

setlocale(LC_ALL, 'fr_FR');

$var = $argv[1];
$reg="^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) \d{1,2} ([Jj]anvier|[Ff].vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o.t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd].cembre) \d{4} \d\d:\d\d:\d\d";

function get_month($word) {
	if ((preg_match("[Jj]anvier", $word)) == 1)
		return (1);
	if ((preg_match("[Ff].vrier", $word)) == 1)
		return (2);
	if ((preg_match("[Mm]ars", $word)) == 1)
		return (3);
	if ((preg_match("[Aa]vril", $word)) == 1)
		return (4);
	if ((preg_match("[Mm]ai", $word)) == 1)
		return (5);
	if ((preg_match("[Jj]uin", $word)) == 1)
		return (6);
	if ((preg_match("[Jj]uillet", $word)) == 1)
		return (7);
	if ((preg_match("[Aa]o.t", $word)) == 1)
		return (8);
	if ((preg_match("[Ss]eptembre", $word)) == 1)
		return (9);
	if ((preg_match("[Oo]ctobre", $word)) == 1)
		return (10);
	if ((preg_match("[Nn]ovembre", $word)) == 1)
		return (11);
	if ((preg_match("[Dd].cembre", $word)) == 1)
		return (12);
}

if (isset($var))
{
	$match = preg_match($reg, $var);
	date_default_timezone_set('Europe/Paris');
	$var = strftime($var);
	echo "$var\n";
	$time = strtotime($var);
	if ($time != false)
		echo "$time\n";
	else
		echo "Wrong Format\n";
}

?>
