<?php
  session_start();

  if(isset($_SESSION['userID'])) {
    echo "userID 세션이 존재합니다.";

    unset($_SESSION['userID']);
  }
  else {
    echo "userID 세션이 존재하지 않습니다.";
  }

  echo "</br>";
  echo "userID 세션의 값 : {$_SESSION['userID']}";
?>
