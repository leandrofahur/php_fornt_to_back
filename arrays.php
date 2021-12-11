<?php

  # Array - Variable thah holds multiple values:
  /* 
      - Indexed
      - Associative
      - Multi-dimensional
  */

  // Indexed:
  $people = array('Leandro', 'Ocean', 'Aquila');
  $ids = array(32, 25, 24);
  $cars = ['Honda', 'Toyota', 'Ford'];
  
  $cars[3] = 'Chevy';

  // print_r($cars);  
  // var_dump($cars);
  

  // Associative arrays:
  $people = array('Leandro' => 35, 'Ocean' => 25, 'Aquila' => 24);
  // echo $people['Leandro'];
  // var_dump($people);
  $people['Guilherme'] = 25;
  // print_r($people);
  

  // Multi-dimensional:
  $cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 25, 12),
    array('Hyundai', 7, 7)
  );

  // count($cars) = 4
  // count($cars[0]) = 3

  for($i = 0; $i < count($cars); $i++) {
    // for($j = 0; $j < count($cars[0]); $j++) {
    //   if($j === 0)
    //     echo 'Car: ' . $cars[$i][$j] . '<br>';
    //   if($j === 1)
    //     echo 'Inventory: ' . $cars[$i][$j] . '<br>';
    //   if($j === 2)
    //     echo 'Sold: ' . $cars[$i][$j] . '<br>';
    // }           
    echo 'Car: ' . $cars[$i][0] . ' | ';
    echo 'Inventory: ' . $cars[$i][1] . ' | ';
    echo 'Sold: ' . $cars[$i][2] . '<br><br>';
  } 

?>