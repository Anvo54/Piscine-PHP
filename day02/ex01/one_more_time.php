#!/usr/bin/php
<?php
	setlocale(LC_TIME, "fr_FR");
	if ($argc != 2)
		return;
	$str = explode(' ', $argv[1]);
	if (count($str) != 5)
		echo "Wrong Format\n";
	$time = explode(":", $str[4]);
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
	$tester = explode(' ', strftime("%A %e %B %Y %H:%M:%S", mktime($time[0], $time[1], $time[2], $months[$str[2]],$str[1],$str[3])));
	if (preg_match("/^$str[0]/i", $tester[0]) != 1)
	{
		echo "Wrong Format\n";
		return;	
	}
	if ($str[1] - $tester[1] != 0)
	{
		echo "Wrong Format\n";
		return;	
	}
	if (preg_match("/^$str[2]/i", $tester[2]) != 1)
	{
		echo "Wrong Format\n";
		return;	
	}
	if ($str[3] - $tester[3] != 0)
	{
		echo "Wrong Format\n";
		return;	
	}
	$result = mktime($time[0], $time[1], $time[2], $months[$str[2]],$str[1],$str[3]) - mktime(0,0,0,1,1,1970);
	echo "$result\n";
?>