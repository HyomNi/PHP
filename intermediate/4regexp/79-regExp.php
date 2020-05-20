<?php
  //패턴 대입
  $pattern = '/^[A-z0-9\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]{1}\.[a-z]+$/';

  $str = '2example22@gmail.com';

  if(preg_match($pattern, $str, $matches)) {
    echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.";
    echo "<pre>";
    var_dump($matches);
    echo "</pre>";
  }
  else {
    echo "이메일 주소 유효성에 맞지 않습니다.";
  }
?>
