<?php 
  var_dump(findMissing([1, 3, 5, 9, 11]));
  var_dump(findMissing([1, 5, 7]));
  var_dump(findMissing([100, 200, 300, 500]));
  
  /*
    i - индекс элемента с начала
    j - индекс элемента с конца
    1. i = индекс первого элемента, j = индекс последнего элемента
    2. проверяем что i < j
    3. берем элемент с индексом i и вычитаем его из следующего элемента (шаг прогрессии с начала)
    4. берем элемент с индексом j и вычитаем из него предыдущий элемент (шаг прогрессии с конца)
    5. если шаг прогрессии с начала меньше чем в конце, это значит что в конце пропущено число, вычитаем из элемента с индексом j 
       шаг прогрессии с начала. конец алгоритма.
    6. если шаг прогрессии с начала больше чем в конце, это значит что в начале пропущено число, вычитаем из элемента с индексом i+1 
       шаг прогрессии с конца. конец алгоритма.
    7. возврат к шагу 2
  */

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
