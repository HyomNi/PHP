<?php
  class pen {
    public $color;
    public $bold;
    public $price;

    public function write($contents) {
      echo "{$contents}을(를) 쓰다.";
    }

    public function draw($contents) {
      echo "{$contents}을(를) 그리다.";
    }
  }

  $pen = new pen();
  $pen->write('책');
?>
