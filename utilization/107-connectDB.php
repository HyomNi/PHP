<?php
  $host = 'localhost';
  $user = 'root';
  $pw = 'gyals1234';
  $dbConnect = new mysqli($host, $user, $pw);
  $dbConnect->set_charset("utf8mb4");

  if(mysqli_connect_errno()) {
    echo "데이터베이스 접속 실패";
    echo mysqli_connect_error();
  }
  else {
    echo "접속 성공";
  }




  /*
----------------------------------------------------------------------------
  --나만의 방식
  $host = 'localhost';
  $user = 'root';
  $pw = 'gyals1234';
  $db = 'practice';

  $dbCon = mysqli_connect($host, $user, $pw, $db);

  if($dbCon) {
    echo "접속 성공";
  }
  else {
    echo "접속 실패";
  }
  mysqli_close($dbCon);*/
?>
