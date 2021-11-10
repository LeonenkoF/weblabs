<?php

$n=rand(1,20);
for($i=0;$i<=$n;$i++)
	{

		$a[]=rand(-100,100);

	}

	print_r (implode (" ",$a));

	foreach($a as $value){

		if(($value % 2 != 0) && ($value < 0))

		{

			$sum += $value;

		}

	}


		echo '<br>' . '<br>';

		echo "Сумаа нечётных и отрецательных элементов: ";

		echo ($sum);

?>