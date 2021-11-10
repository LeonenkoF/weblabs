<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<h3>Кальулятор</h3>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> Введите число: <INPUT type="text" name="a" size="5">
 <P> Действие: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> Чётные
 <OPTION VALUE="2"> Нечётные
 <OPTION VALUE="3"> Простые
 <OPTION VALUE="4"> Составные
 </SELECT>
 <P> <INPUT type="submit" value="Вычислить">
</FORM>
<?
            

        $a=range(1,$_POST["a"]);

        print_r (implode (" ",$a));

        echo '<br>' . '<br>';


foreach($a as $value){

switch ($_POST["z"]) {

 case 1:

 if($value % 2 ==0 ){

    echo($value. " ");

 }else{

 break;}

 case 2:

 if($value % 2 !=0 ){


    echo($value. " ");


 }else{

 break;}

 case 3:

   echo gmp_prob_prime("$value");

 break;

 case 4:
    echo gmp_nextprime($value);
 break;
}
}
?>