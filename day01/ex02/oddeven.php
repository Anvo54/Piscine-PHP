<?php
$stdin = fopen('php://stdin', 'r');

	while(!feof($stdin))
	{
		echo "Enter a number: ";
		$line = trim(fgets($stdin));
		if (feof($stdin))
			{
				echo "^D\n";
				break;
			}
		if(is_numeric($line))
		{
			if ($line % 2 == 0)
				echo "The number $line is even\n";
			else
				echo "The number $line is Odd\n";
		}
		else
			echo "'$line' is not a number\n";
	}
?>