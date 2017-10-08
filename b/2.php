<style media="screen">
  span {
    display: inline-block;
    min-width: 15px;
  }
</style>

<?php
for ($i=2; $i < 20 ; $i+=2) {
  for ($j=2; $j < 20 ; $j+=2) {
    if ($j == 18-$i+2 ) {
      echo $j-2;
    } else {
      echo "<span>&nbsp;</span>";
    }
  } echo "<br/>";
}
 ?>
