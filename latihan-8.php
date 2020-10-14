<php                                      
for ($t=0;$t<9;$t++){
    for($r=0;$r<9;$r++){
        if($r==$t){
            echo " + " ;
        }else
        echo " - ";                                                                  
    }                      
    echo PHP_EOL;
}                                