<style media="screen">
  span {
    display: inline-block;
    min-width: 15px;
  }
</style>

<?php

$a = 5;

for ($i=1; $i <= $a ; $i++) {
  $b = 1;
  for ($j=1; $j <  $a*2 ; $j++) {
    if ($i >= $j - 4 && $j >= $a - $i + 1) {
      echo "<span>".$b++."</span>";
    }else {
      echo "<span>&nbsp</span>";
    }
  } echo "<br>";
}

 ?>
