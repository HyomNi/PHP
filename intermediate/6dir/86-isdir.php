<?php
  $folderName = array();
  $folderName[0] = 'hello';
  $folderName[1] = 'world';

  function dirCheck($folderName) {
    $isDir = is_dir($folderName);
    if($isDir) {
      echo "{$folderName} 폴더가 존재합니다.</br>";
    }
    else {
      echo "{$folderName} 폴더가 존재하지 않습니다.</br>";
    }
    return;
  }

  for($i=0; $i<sizeof($folderName); $i++) {
    dirCheck($folderName[$i]);
  }

?>
