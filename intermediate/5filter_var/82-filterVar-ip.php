<?php
  $ip = array();
  $ip[0] = "192.168.0.1";
  $ip[1] = "192.168.0.";

  function ipCheck($ip) {
    $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);

    if($ipCheck) {
      echo "{$ip}는 올바른 ip 입니다.</br>";
    }
    else {
      echo "{$ip}는 잘못된 ip 입니다.</br>";
    }
    return;
  }

  for($i=0; $i<sizeof($ip); $i++) {
    ipcheck($ip[$i]);
  }
?>
