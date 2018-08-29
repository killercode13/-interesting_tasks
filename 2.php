<?php 
  
  function CountFive($num){
    
    $c = str_split($num);
    $count = count($c);
    $r1 = end($c) >= 5 ? 1 : 0;
    $r2 = 0;
    $k = 1;
    for($i = $count - 2,$j = 10; $i >= 0; $i--, $j *= 10){
      $r2 = $c[$i] * $k; 
      if($c[$i] > 5){
         $r2 += $j - 1; 
      }
      
      if($c[$i] == 5){
        $r1 = implode('',array_slice($c, $i+1)) + 1;
      }

      $r1 += $r2;
      $k = 10 + $j - $k;
    }

    return $r1;
  }

  function func($x1, $x2){    
    $all = $x2 - $x1 + 1; 
    $diff = $x1 < 0 && $x2 > 0; // different signs of numbers 
    echo $all . "\n";

    $x1 = abs($x1);
    $x2 = abs($x2);
        
    if($x1 > $x2){ // swap
      $x1 += $x2; 
      $x2 = $x1 - $x2; 
      $x1 -= $x2;
    }

    $c1 = CountFive($x2);
    $c2 = CountFive($diff ? $x1+1 : $x1-1); // +-1 для включения нижнего предела
    
    if($diff){
      $c = $c1 + $c2;
    }
    else{
      $c = $c1 - $c2;
    }
   
    echo $c1  .'  ' . $c2 . '  ' .$c . "\n";

    return $all - $c;
  }

  /*echo " \n " . func(1, 90);
  echo " \n " . func(-4, 17);
  echo " \n " . func(-4, 37);*/
  echo " \n " . func(-15, 33);

?>
