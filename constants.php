<?php
class Goodbye {
  const message = "Thank you for OOPS Concepts!";

//   echo Goodbye::message;

  public function byebye() {
    echo self::message;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>