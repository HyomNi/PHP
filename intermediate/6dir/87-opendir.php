<?php
  $folderName = array();
  $folderName[0] = 'hello';
  $folderName[1] = 'world';

  function openDirCheck($folderName) {
    $openDir = opendir($folderName);
    if($openDir) {
      echo "{$folderName} 폴더를 열었습니다.</br>";
      echo "{$openDir}</br>";
    }
    else {
      echo "{$folderName} 폴더를 여는데 실패했습니다.</br>";
      echo "{$openDir}</br>";
    }
    return;
  }

  for($i=0; $i<sizeof($folderName); $i++) {
    openDirCheck($folderName[$i]);
  }

?>
