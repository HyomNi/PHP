<?php
  $folderName = '../6dir';
  $opendir = opendir($folderName);
  if($opendir) {
    echo readdir($opendir)."</br>";
    echo readdir($opendir)."</br>";
    echo readdir($opendir)."</br>";
    echo readdir($opendir)."</br>";

    rewinddir($opendir);  //다시 처음부터 폴더의 데이터를 불러오는 기능
    echo "<br>rewinddir() 함수 실행 결과</br>";

    echo readdir($opendir)."</br>";
    echo readdir($opendir)."</br>";
    echo readdir($opendir)."</br>";
    echo readdir($opendir)."</br>";
  }

?>
