<?php
 class Persegi {
     public $panjang;
     public $tinggi;

     static $rumus = "panjang * tinggi";

     public static function luas(){
         echo "panjang * tinggi";
     }
 }

        echo"input panjang:";
        $panjang=(int)fgets(STDIN);
        echo "input tinggi:";
        $tinggi=(int)fgets(STDIN);
        echo $hasil=$panjang * $tinggi."\n";
        var_dump("panjang * tinggi");