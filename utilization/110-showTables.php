<?php
  include './108-2-connectDB.php';

  $sql = "SHOW TABLES";
  $result = $dbConnect->query($sql);

  if($result) {
    $list = $result->fetch_array(MYSQLI_BOTH);

    echo "테이블 목록 </br>";

    for($i=0; $i<count($list)-1; $i++) {
      echo $list[$i]."</br>";
    }
  }
  else {
    echo "테이블 존재 안함";
  }
?>
