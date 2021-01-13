<?php
    $annee=rand(0,2021);
    if ($annee %4==0 && $annee%100!=0 || $annee%400==0){
            echo"$annee est une annee bissextille";
        }else{
            echo"$annee n'est pas une annee bissextille";
    }
?>