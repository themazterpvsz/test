<style media="screen">
  span {
    display: inline-block;
    min-width: 9px;
  }
</style>

<?php

for ($y=1; $y < 10 ; $y++) {
  for ($x=1; $x < 10; $x++) {
    for ($n = 0; $n <10; $n++) {
    if ($x == 9-$y+1 | $y == $x | $x == 5 | $y == 5) {
      echo ($n * 2 + 1);
    } else {
      echo "<span>&nbsp;</span>";
    }
  }
}
  echo "<br/>";
}

 ?>
