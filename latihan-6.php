<?php
for ($t=0;$t<9;$t++){
    for($r=0;$r<9;$r++){
        if($r==8||$t==9){
            echo " + " ;
        }else
        echo " 0 ";
    }
    echo PHP_EOL;
}