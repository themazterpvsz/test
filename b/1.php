<style media="screen">
  span {
    display: inline-block;
    min-width: 15px;
  }
</style>


<?php
for ($i=1; $i < 18 ; $i+=2) {
  for ($j=1; $j < 18 ; $j+=2) {
    if ($i == $j) {
        echo "<span>".($i)." &nbsp;</span>";
    } else {
      echo "<span>&nbsp;</span>";
    }
  } echo "<br/>";
}
 ?>
