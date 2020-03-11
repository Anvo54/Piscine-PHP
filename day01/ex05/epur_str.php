#!/usr/bin/php
<?php
	$arr = array_filter(explode(' ',$argv[1]));
	$arr = array_values($arr);
	if(count($arr) == 0)
		return ;
	$r_value = implode(' ', $arr);
	echo "$r_value\n";
?>
