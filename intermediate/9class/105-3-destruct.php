<?php
  class pen{
    public $color;
    public $bold;
    public $price;

    function __construct($color, $bold, $price) {
      echo "사용중인 펜</br>";
      echo "색 : {$color}</br>";
      echo "두께 : {$bold}</br>";
      echo "가격 : {$price}</br>";
    }

    public function write($contents) {
      echo "{$contents}을(를) 쓰다.";
    }

    function __destruct() {
      echo "pen 객체 사용이 끝났습니다.";
    }

  }

  $pen = new pen('핑크', '두꺼운', '1000');
  echo "Hello World";
  $pen->write('글');
?>
