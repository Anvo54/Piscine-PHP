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
		sort($str_arr);
		$array = array_values($str_arr);
		unset($str_arr);
		return($array);
	}
?>