<?php
    
    $cust[cnum]= "2001";
    $cust[cname]= "Hoffman";
    $cust[city]= "London";
    $cust[snum]= "1001";


    foreach($cust as $key => $value)
  {
     echo "$key = $value <br />";
  }


        echo '<br>' . '<br>';

    $cust[rating]= "100";

        foreach($cust as $key => $value)
  {
     echo "$key = $value <br />";
  }



  echo '<br>' . '<br>';

  echo "Отсортированный массив по значениям: " . '<br>';

  asort($cust);

    foreach($cust as $key => $value)
  {
     echo "$key = $value <br />";
  }





    echo '<br>' . '<br>';

  echo "Отсортированный массив по ключам: " . '<br>';

  ksort($cust);

    foreach($cust as $key => $value)
  {
     echo "$key = $value <br />";

  }


  echo '<br>' . '<br>';

  echo "Отсортированный массив с помощью sort: " . '<br>';

  sort($cust);

      foreach($cust as $key => $value)
  {
     echo "$key = $value <br />";
  }


?>