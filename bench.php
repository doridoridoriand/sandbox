<?php
class zeus {
  public function cpu_match_user() {
    $array = [];
    for ($i = 0; $i < 10000; $i++) {
      array_push($array, $i);
      var_dump($array);
    }
  }
}

$zeus = new zeus;
$zeus->cpu_match_user();
