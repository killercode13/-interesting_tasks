<?php 
  var_dump(findMissing([1, 3, 5, 9, 11]));
  var_dump(findMissing([1, 5, 7]));
  var_dump(findMissing([100, 200, 300, 500]));
  
  function findMissing($list){
    for($i = 0, $j = count($list) - 1; $i < $j; $i++, $j--){
      $x = $list[$i+1] - $list[$i];
      $y = $list[$j] - $list[$j-1];
      if($x < $y){
        return $list[$j] - $x;
      }

      if($x > $y){
        return $list[$i+1] - $y;
      }
      
    }
    
    return 0;
  }
