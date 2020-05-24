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
    $sql = "CREATE DATABASE practice";
    $result = $dbConnect->query($sql);

    if($result) {
      echo "데이터베이스 생성 완료";
    }
    else {
      echo "데이터베이스 생성 실패";
    }
  }
?>
