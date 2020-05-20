<?php
  function chackUrl($url) {
    $urlCheck = filter_Var($url, FILTER_VALIDATE_URL);

    if($urlCheck) {
      echo "{$url}는 올바른 Url 입니다.";
      echo "</br>";
    }
    else {
      echo "{$url}는 잘못된 Url 입니다.";
      echo "</br>";
    }
    return ;
  }

  $url = array();
  $url[0] = "http://www.tomodevel.jp";
  $url[1] = "http://everdevel.com";

  for($i=0; $i<2; $i++) {
    chackUrl($url[$i]);
  }
?>
