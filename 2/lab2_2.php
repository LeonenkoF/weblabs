<p> 
<p>
<?php
$c=rand(3,20);
for($i=0;$i<=$c;$i++)
	{

		$arr[]=rand(10,100);

	}
    	echo "Массив из " . $c . " элементов, заполненный случайными числами: ";

		print_r (implode (" ",$arr));

    	sort($arr);

    	echo '<br>' . '<br>';



 		echo "Отсортированный массив: ";

		print_r (implode (" ",$arr));

    	echo '<br>' . '<br>';



 		echo "Отсортированный массив в обратном порядке: ";

 		print_r (implode (" ",array_reverse($arr)));

		echo '<br>' . '<br>';



 		echo "Массив после удаление последнего элемента: "; // не сделано!!!!


 		echo '<br>' . '<br>';

 		echo "Сумма элементов массива: " . array_sum($arr);


 		echo '<br>' . '<br>';

 		echo "Количество элементов массива: " . count($arr);



 		echo '<br>' . '<br>';

 		echo "Среднее арифметическое  массива: " . array_sum($arr) / count($arr);



 		echo '<br>' . '<br>';

		if (in_array("50", $arr)) {
		    echo "50 присутствует в массиве";
		}
		else {
		    echo "50 не присутствует в массиве";
		};



 		echo '<br>' . '<br>';

		$unqarr=array_unique($arr);

		echo "Массив из уникальных значений: ";

		print_r (implode (" ",array_reverse($unqarr)));
?>