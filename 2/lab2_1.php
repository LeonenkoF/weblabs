<?php
  for ($n = 1; $n <= 10; $n++)

  {

    $i=($n*($n+1))/$n;

    $treug[]=$i;

  }

    
    echo '<pre>';
    echo "Массив treug:" . '<br>';
    print_r ($treug);
    echo '</pre>';

  for ($b = 1; $b <= 10; $b++)

  {

   $a = (pow($b, 2));

    $kvd[]=$a;

  }

    echo "Массив kvd:" . '<br>';

    for($b = 1; $b <= 10; $b++)

      {
        print $kvd[$b];print " ";

      }

    $rez=array_merge($treug,$kvd);

    echo '<pre>';
    echo "Массив rez:" . '<br>';
    print_r ($rez);
    echo '</pre>';


    echo "Отсортированный массив rez:" . '<br>';

    sort($rez);

    echo '<pre>';
    print_r ($rez);
    echo '</pre>';

    echo "Отсортированный массив rez без первого элемента:" . '<br>';

    unset($rez[0]);

    echo '<pre>';
    print_r ($rez);
    echo '</pre>';

    echo "Массив без повторяющихся элементов:" . '<br>';

    $rez1=array_unique($rez);

    echo '<pre>';
    print_r ($rez1);
    echo '</pre>';

?>