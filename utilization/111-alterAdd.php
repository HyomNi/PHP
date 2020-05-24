<?php
  include './108-2-connectDB.php';

  //마지막에 띄어쓰기가 있습니다.
  $sql = "ALTER TABLE member ADD age ";
  $sql .= "int unsigned comment '현재 나이' AFTER gender";
  $result = $dbConnect->query($sql);

  if($result) {
    echo "필드 추가 완료";
  }
  else {
    echo $sql;
  }
?>
