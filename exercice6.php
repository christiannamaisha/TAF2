<?php
    $mois=rand(1,12);
    $annee=rand(0,2021);
    $nbJr=null;
    if ($mois==1 ||$mois==3 ||$mois==5 ||$mois==7 ||$mois==8 ||$mois==10 ||$mois==12){
        echo"$mois mois compte 31 jours";
    }else{
        echo"$mois mois compte 30 jours";
    }
    if ($mois==2){
        if ($annee % 4== 0){
            echo"$mois mois compte 29 jours";
        }else{
            echo"$mois mois compte 28 jours";
        }
    }
    
    
?>