<?php
for ($t=0;$t<9;$t++){
    for($r=0;$r<9;$r++){
        if($t==$r||$r==8-$t||$r==4||$t==4){
            echo " + " ;
        }else
        echo " - ";
    }
    echo PHP_EOL;
}