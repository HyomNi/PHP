<?php
  $url = array();
  $url[0] = "http://www.tomodevel.jp";
  $url[1] = "http://everdevel.com";

  function chackUrl($url) {
    $urlCheck = filter_Var($url, FILTER_VALIDATE_URL);

    if($urlCheck) {
      echo "{$url}는 올바른 Url 입니다.</br>";
    }
    else {
      echo "{$url}는 잘못된 Url 입니다.</br>";
    }
    return;
  }

  for($i=0; $i<sizeof($url); $i++) {
    chackUrl($url[$i]);
  }
?>
