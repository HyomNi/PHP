<?php
  session_start();

  //세선 생성
  $_SESSION['userID'] = 'everdevel';

  if(isset($_SESSION['userID'])) {
    echo "세션 생성 완료 세선 userID의 값 : {$_SESSION['userID']}";
  }
  else {
    echo "세션 생성 실패";
  }
?>
