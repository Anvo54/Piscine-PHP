#!/usr/bin/php
<?php
	if($argc > 1)
	{
		$array = array_filter(explode(' ', $argv[1]));
		$tmp = array_shift($array);
		array_push($array, $tmp);
		foreach($array as $key => $value)
		{
			if ($key < count($array) - 1)
				echo "$value ";
			else
				echo "$value";
			}
		echo "\n";
	}
?>
