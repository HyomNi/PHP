<?php
  $reg = '/^[A-Za-z0-9]{1}[A-Za-z0-9\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]+\.(([a-z0-9]+[\.][a-z0-9]+)|([a-z]{2,3}))$/';
  //$str = "chocoemon11@tistory.com";
  $str = "cheo12@2ti-story.go.kr";

  if(preg_match($reg, $str, $result)) {
    echo "정규식 표현에 맞습니다!</br>";
    var_dump($result);
  }
  else {
    echo "정규식 표현에 맞지않습니다..";
    var_dump($result);
  }
?>
