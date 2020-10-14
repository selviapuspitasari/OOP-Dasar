<?php
for ($t=1;$t<=6;$t++){
    for($r=1;$r<=5;++){
        if($r==1-$t){
            echo " + " ;
        }else
        echo " - ";
    }
    echo PHP_EOL;
}