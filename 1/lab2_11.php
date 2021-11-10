<HTML>
    <title>Леоненко Ф.И. ЭАС-410</title>
<BODY>

<?php

   $a = rand(0,100);

   echo ("Натуральное число:" . $a . '<br>');

   echo ("Делители числа:" . '<br>');

   for ($i=2; $i<$a; $i++){


       if($a % $i == 0) {

         echo ($i . '<br>');

       }
   }
?>
</BODY>
</HTML>