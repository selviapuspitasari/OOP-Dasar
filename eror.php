<?php

function persegi($panjang,$tinggi) {
    if("$panjang=<0||$tinggi=<0") {

    throw new Exception("Agak eror");
    }
    return true;
}

try {
    persegi(-2,1);
    echo 'kalau ini tampil berarti gak eror';
} catch(Exception $a) {
    echo 'Message: ' .$a->getMessage();
} finally {
      echo " finally";
}