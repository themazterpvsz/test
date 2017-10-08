<style media="screen">
  span {
    display: inline-block;
    min-width: 9px;
  }
</style>

<?php

for ($bar=1; $bar < 10 ; $bar++) {
  for ($kol=1; $kol < 10; $kol++) {
    if ($kol == 9-$bar+1 | $bar == $kol | $kol == 5 | $bar == 5) {
      echo "<span>*</span>";
    } else {
      echo "<span>&nbsp;</span>";
    }
  }
  echo "<br/>";
}

 ?>
