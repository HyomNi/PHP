<?php
  $float = array();
  $float[0] = 123;
  $float[1] = 1.235;
  $float[2] = "hello";

  function floatCheck($float) {
    $floatCheck = filter_Var($float, FILTER_VALIDATE_FLOAT);

    if($floatCheck) {
      echo "{$float}는 실수 입니다.</br>";
    }
    else {
      echo "{$float}는 실수가 아닙니다.</br>";
    }
    return;
  }

  for($i=0; $i<sizeof($float); $i++) {
    floatcheck($float[$i]);
  }
?>
