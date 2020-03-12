#!/usr/bin/php
<?php
	function ft_test($str)
	{
		$str = str_replace($str[1], strtoupper($str[1]), $str[0]);
		return $str;
	}

	function ft_toupper($matches)
	{
		$str = preg_replace_callback("/title=\"(.*?)\"/s", "ft_test", $matches[0]);
		$str = preg_replace_callback("/>(.*?)</s", "ft_test", $str);
		return($str);
	}
	if (!file_exists($argv[1]))
			return;
	$file = file_get_contents($argv[1]);

	$file = preg_replace_callback("/<a[^>]*>(.*?)<\/a>/s", "ft_toupper", $file);
	echo $file;
?>
