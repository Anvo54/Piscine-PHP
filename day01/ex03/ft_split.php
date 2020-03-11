#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$str_arr = explode(' ', $str);
		foreach($str_arr as $key => $value)
		{
			if(empty($value))
				unset($str_arr[$key]);
		}
		$array = array_values($str_arr);
		sort($array);
		return($array);
	}
?>