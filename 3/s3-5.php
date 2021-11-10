<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<h3>Анкета "Ваш характер" </h3>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<P> Введите ваше имя: <INPUT type="text" name="nameing" size="15">
<h4>1. Считаете ли Вы, что у многих ваших знакомых хороший характер?</h4>
            <p>
                <input type="radio" value="yes" checked name="question1"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question1"/>Нет
            </p>
<h4>2. Раздражают ли Вас мелкие повседневные обязанности?</h4>
            <p>
                <input type="radio" value="yes" checked name="question2"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question2"/>Нет
            </p>
<h4>3. Верите ли Вы, что ваши друзья преданы Вам?</h4>
            <p>
                <input type="radio" value="yes" checked name="question3"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question3"/>Нет
            </p>
<h4>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</h4>
            <p>
                <input type="radio" value="yes" checked name="question4"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question4"/>Нет
            </p>
<h4>5. Способны ли Вы ударить собаку или кошку?</h4>
            <p>
                <input type="radio" value="yes" checked name="question5"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question5"/>Нет
            </p>
<h4>6. Часто ли Вы принимаете лекарства?</h4>
            <p>
                <input type="radio" value="yes" checked name="question6"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question6"/>Нет
            </p>
 <h4>7. Часто ли Вы меняете магазин, в который ходите за продуктами?</h4>
            <p>
                <input type="radio" value="yes" checked name="question7"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question7"/>Нет
            </p>
  <h4>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</h4>
            <p>
                <input type="radio" value="yes" checked name="question8"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question8"/>Нет
            </p>
  <h4>9. Тяготят ли Вас общественные обязанности?</h4>
            <p>
                <input type="radio" value="yes" checked name="question9"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question9"/>Нет
            </p>
  <h4>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</h4>
            <p>
                <input type="radio" value="yes" checked name="question10"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question10"/>Нет
            </p>
  <h4>11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</h4>
            <p>
                <input type="radio" value="yes" checked name="question11"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question11"/>Нет
            </p>
  <h4>12. Сохранилась ли у Вас фигура по сравнению с прошлым?</h4>
            <p>
                <input type="radio" value="yes" checked name="question12"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question12"/>Нет
            </p>
  <h4>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</h4>
            <p>
                <input type="radio" value="yes" checked name="question13"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question13"/>Нет
            </p>
  <h4>14. Нравится ли Вам семейная жизнь?</h4>
            <p>
                <input type="radio" value="yes" checked name="question14"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question14"/>Нет
            </p>
  <h4>15. Злопамятны ли Вы?</h4>
            <p>
                <input type="radio" value="yes" checked name="question15"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question15"/>Нет
            </p>
  <h4>16. Находите ли Вы, что стоит погода, типичная для данного времени года?</h4>
            <p>
                <input type="radio" value="yes" checked name="question16"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question16"/>Нет
            </p>
  <h4>17. Случается ли Вам с утра быть в плохом настроении?</h4>
            <p>
                <input type="radio" value="yes" checked name="question17"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question17"/>Нет
            </p>
  <h4>18. Раздражает ли Вас современная живопись?</h4>
            <p>
                <input type="radio" value="yes" checked name="question18"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question18"/>Нет
            </p>
  <h4>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</h4>
            <p>
                <input type="radio" value="yes" checked name="question19"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question19"/>Нет
            </p>
  <h4>20. Надоедает ли Вам делать лабораторные по PHP?</h4>
            <p>
                <input type="radio" value="yes" checked name="question20"/>Да
            </p>
            <p>
                <input type="radio" value="no" name="question20"/>Нет
            </p>
                                                               
 <P> <INPUT type="submit" name="button" value="Ответить">
</FORM>

<?php 
if( isset( $_POST['button'] )){
    $a==0;

    if($_POST["question3"]=="yes"){


       $a++;
    }

    if($_POST["question9"]=="yes"){


       $a++;
    }
    if($_POST["question10"]=="yes"){


       $a++;
    }    
    if($_POST["question14"]=="yes"){


       $a++;
    }    
    if($_POST["question19"]=="yes"){


       $a++;
    }
        if($_POST["question1"]=="no"){


       $a++;
    }
        if($_POST["question2"]=="no"){


       $a++;
    }
        if($_POST["question4"]=="no"){


       $a++;
    }
        if($_POST["question5"]=="no"){


       $a++;
    }
        if($_POST["question6"]=="no"){


       $a++;
    }
        if($_POST["question7"]=="no"){


       $a++;
    }
        if($_POST["question8"]=="no"){


       $a++;
    }
        if($_POST["question11"]=="no"){


       $a++;
    }
        if($_POST["question12"]=="no"){


       $a++;
    }
        if($_POST["question15"]=="no"){


       $a++;
    }
        if($_POST["question16"]=="no"){


       $a++;
    }
        if($_POST["question17"]=="no"){


       $a++;
    }
        if($_POST["question18"]=="no"){


       $a++;
    }
        if($_POST["question20"]=="no"){


       $a++;
    }

echo($a);

    if($a>"15")
    {
    echo($_POST["nameing "]." У Вас покладистый характер");
    }

    elseif(("8"<$a) && ($a<"15"))
    {
    echo($_POST["nameing "]." Вы не лишены недостатков, но с
    вами можно ладить");
    }

    elseif($a<"8")
    {
    echo($_POST["nameing "]." Вашим друзьям можно посочувствовать");
    }
}
 ?>