<?php
    $chiffre1=rand(-9,9);
    $chiffre2=rand(-9,9);
    $chiffre3=rand(-9,9);
    $min=null;
    $max=null;
    $moy=null;
    /*if($chiffre1<$chiffre2 & $chiffre2<$chiffre3){
        $min=$chiffre1;
        $moy=$chiffre2;
        $max=$chiffre3;
      }
    if($chiffre2<$chiffre1 & $chiffre1<$chiffre3){
        $min=$chiffre2;
        $moy=$chiffre1;
        $max=$chiffre3;
      }
    if($chiffre3<$chiffre2 & $chiffre2<$chiffre1){
        $min=$chiffre3;
        $moy=$chiffre2;
        $max=$chiffre1;
      }
    if($chiffre1<$chiffre3 & $chiffre3<$chiffre2){
        $min=$chiffre1;
        $moy=$chiffre3;
        $max=$chiffre2;
      }
    if ($chiffre1==$chiffre2 & $chiffre2==$chiffre3){
      echo"les chiffres sont egaux";
    }
    echo"le minimum est $min, maximum est $max et la moyenne est $moy";
*/
    if ($chiffre1>$chiffre2){
      $min=$chiffre2;
      $max=$chiffre1
    }else{
      $min=$chiffre1;
      $max=$chiffre2
    }
    if ($chiffre3<$min){
      $moy=$min;
      $min=$chiffre3;
    }else{
      if ($chiffre3<$max){
        $moy=$chiffre3;
      }else{
        $moy=$max;
        $max=$chiffre3;
      }
    }
    echo"$max,$moy,$min";
?>