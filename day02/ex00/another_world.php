#!/usr/bin/php
<?php
	$str = trim($argv[1]);
	$str = preg_replace('/\s+/', ' ', $str);
	$str = preg_replace('/\t+/', ' ', $str);
	echo "$str\n"
?>