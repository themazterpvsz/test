<style media="screen">
  span {
    display: inline-block;
    min-width: 15px;
  }
</style>

<?php
for ($i=1; $i < 19; $i+=2) {
  for ($j=1; $j < 19 ; $j+=2) {
        if ($i == $j ) {
          echo "<span> $i &nbsp; </span>";
        } elseif ($j == 16-$i+2) {
          echo "<span>".($j-1)."</span>";
        } else {
          echo "<span>&nbsp;</span>";
        }
  }echo "<br>";
}
 ?>
