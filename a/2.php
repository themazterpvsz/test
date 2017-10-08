<style media="screen">
  span {
    display: inline-block;
    min-width: 9px;
  }
</style>

<?php

for ($bar=1; $bar < 10 ; $bar++) {
  for ($kol=1; $kol < 10; $kol++) {
    if ($bar == 9-$kol+1 ) {
      echo "<span>*</span>";
    } else {
      echo "<span>&nbsp;</span>";
    }
  }
  echo "<br/>";
}

 ?>
