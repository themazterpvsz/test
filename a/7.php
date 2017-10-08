<style media="screen">
  span {
    display: inline-block;
    min-width: 9px;
  }
</style>

<?php
$n = 10;
for ($bar=1; $bar < $n ; $bar++) {
  for ($kol=1; $kol < $n; $kol++) {
    if ($bar >= $kol && $bar >=$n-$kol ) {
      echo "<span>*</span>";
    } else {
      echo "<span>&nbsp</span>";
    }
  }
  echo "<br/>";
}

 ?>
