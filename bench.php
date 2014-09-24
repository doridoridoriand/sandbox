<?php
class zeus {
  public function cpu_match_user() {
    $string = '';
    for ($i = 0; $i < 100000000; $i++) {
      $string . (string)$i;
    }
    //var_dump($string);
  }
}

$zeus = new zeus;
$zeus->cpu_match_user();
