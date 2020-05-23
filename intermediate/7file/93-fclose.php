<?php
  if($fopen = fopen('helloworld.txt', 'r+')) {
    echo "파일을 열었습니다.</br>";
  }
  if(fclose($fopen)) {
    echo "파일을 닫았습니다.</br>";
  }
?>
