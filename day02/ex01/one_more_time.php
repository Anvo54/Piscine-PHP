#!/usr/bin/php
<?php
	setlocale(LC_TIME, "fr_FR.UTF8");
	if ($argc != 2)
		return;
	$str = explode(' ', $argv[1]);
	if (count($str) != 5)
	echo "Wrong Format\n";
	$time = explode(":", $str[4]);
	print_r($str);
	print_r($time);
	
	$months = array("Janvier" => 1,
					"Février" => 2,
	 				"Mars" => 3,
	 				"Avril" => 4,
	 				"Mai" => 5,
	 				"Juin" => 6,
	 				"Juillet" => 7,
	 				"Août" => 8,
	 				"Septembre" => 9,
	 				"Octobre" => 10,
	 				"Novembre" => 11,
					"Décembre" => 12);
	echo strftime("%A %e %B %Y %H:%M:%S\n", mktime($time[0], $time[1], $time[2], $months[$str[2]],$str[1],$str[3]));
	echo strftime("%A %e %B %Y %H:%M:%S", mktime(12,02,21,9,12,2013));
?>