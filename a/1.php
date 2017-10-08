<style media="screen">
  span {
    display: inline-block;
    min-width: 9px;
  }
</style>

<?php

for ($i=1; $i < 10 ; $i++) {
  for ($j=1; $j < 10; $j++) {
    if ($i == $j) {
      echo "<span>*</span>";
    } else {
      echo "<span>&nbsp;</span>";
    }
  }
  echo "<br/>";
}

 ?>
