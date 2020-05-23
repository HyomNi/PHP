<?php
  class pen {
    public $color = '파란';

    function __construct($color) {
      echo "파라미터 color의 값 : {$color}</br>";
      echo "프라퍼티 color의 값 : {$this->color}</br>";
      $this->color = $color;
    }

    public function write($contents) {
      echo "{$this->color}색 펜을 사용하여 ";
      echo "{$contents}을(를) 쓰다.";
    }
  }

  $pen = new pen('핑크');
  $pen->write('글');
?>
