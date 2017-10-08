<style media="screen">
  span {
    display: inline-block;
    min-width: 15px;
  }
</style>

<?php
$a = 10;

for ($i=1; $i < $a; $i+=2) {
  for ($j=1; $j <= $a ; $j+=2) {
    if ($i >= $j) {
      echo "<span>$i</span>";
    } else{
      echo "<span>&nbsp;</span>";
    }
  } echo "<br>";
}
