<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> Введите логин: <INPUT type="text" name="el" size="25">
 <P> <INPUT type="submit" name="button" value="Войти">
</FORM>
<?php 

if( isset( $_POST['button'] )){

    $login[Ivan] = "Ivan_php";
    $login[Fedor] = "Fedor_php";
    $login[Admin] = "Admin_php";


        if($_POST["el"]==$login[Ivan]){

            echo("Здравствуйте, Иванов Иван Иванович");
        }

        elseif($_POST["el"]==$login[Fedor]){

            echo("Здравствуйте, Леоненко Фёдор Иванович");

        }
        elseif($_POST["el"]==$login[Admin]){


            echo("Здравствуйте, вы зашли как Администартор");
        }

        else{

            echo("Здравствуйте, вы ещё не зарегестрированы");
        }
    }
 ?>