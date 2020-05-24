<?php
  $host = 'localhost';
  $user = 'root';
  $pw = 'gyals1234';
  $db = 'practice';

  $dbConnect = new mysqli($host, $user, $pw, $db);
  $dbConnect->set_charset("utf8mb4");

  if(mysqli_connect_errno()) {
    echo "데이터베이스 {$db}에 접속 실패";
  }
?>
