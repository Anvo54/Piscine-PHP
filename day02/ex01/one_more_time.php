#!/usr/bin/php
<?php
	setlocale(LC_TIME, "fr_FR");
	if ($argc != 2)
		return;
	$str = explode(' ', $argv[1]);
	if (count($str) != 5)
		echo "Wrong Format\n";
	$time = explode(":", $str[4]);
	print_r($str);
	print_r($time);
	echo strftime("%A %e %B %Y %H:%M:%S");
	// $months = array("Janvier" => 1,
	// 				"Février"=> 2,
	// 				"Mars"=> 3,
	// 				"Avril"=> 4,
	// 				"Mai"=> 1,
	// 				"Juin"=> 1,
	// 				"Juillet"=> 1,
	// 				"Août"=> 1,
	// 				"Septembre"=> 1,
	// 				"Octobre"=> 1,
	// 				"Novembre" => 1,
	// 				"Décembre" => 1);
	// $days = array("Lundi" => )
	echo $months["1"];
?>