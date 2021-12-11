<?php

  $cars = array(
      array('Honda', 20, 10),
      array('Toyota', 30, 20),
      array('Ford', 25, 12),
      array('Hyundai', 7, 7)
    );

  // for($i = 0; $i < count($cars); $i++) {    
  //   echo 'Car: ' . $cars[$i][0] . ' | ';
  //   echo 'Inventory: ' . $cars[$i][1] . ' | ';
  //   echo 'Sold: ' . $cars[$i][2] . '<br><br>';
  // } 

  // print_r($cars);
  foreach($cars as $car) {
    print_r($car);
  }

?>