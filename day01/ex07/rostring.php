#!/usr/bin/php
<?php
		$array = array_filter(explode(' ', $argv[1]));
		$tmp = array_shift($array);
		array_push($array, $tmp);
		print_r($array);
?>