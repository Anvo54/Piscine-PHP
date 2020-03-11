#!/usr/bin/php
<?php
	function ft_is_sort($array)
	{
		$tmp = $array;
		sort($tmp);
		if (array_diff_assoc($tmp, $array))
			return(false);
		else
			return(true);
	}
?>