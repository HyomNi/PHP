<?php
  $int = array();
  $int[0] = 123;
  $int[1] = 1.235;
  $int[2] = "hello";

  function intCheck($int) {
    $intCheck = filter_Var($int, FILTER_VALIDATE_INT);

    if($intCheck) {
      echo "{$int}는 정수 입니다.</br>";
    }
    else {
      echo "{$int}는 정수가 아닙니다.</br>";
    }
    return;
  }

  for($i=0; $i<sizeof($int); $i++) {
    intcheck($int[$i]);
  }
?>
