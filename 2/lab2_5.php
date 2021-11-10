    <title>Леоненко Ф.И. ЭАС-410</title>
<?php
    
    $a=rand(1,100);
    $b=rand(1,100);

    function getResult($u, $t)

        {

        if ($u*$t<0.5){

            return((1+(cos($t-$u)))/(($u/$t)+($t**2)));

        }

        else

        {

            return(sin(log(abs($u/$t))));

        }

        }

    $z=pow(cos(getResult($a,$b)+getResult($a+$b,$a-$b)),3);

    echo ($z);

?>