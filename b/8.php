<style media="screen">
  span {
    display: inline-block;
    min-width: 20px;
  }
</style>

<?php
  for ($i=1; $i <= 18; $i+=2) {
    for ($j=1; $j <= 18 ; $j+=2) {
      if ($i == $j) {
        echo "<span>$i</span>";
      } elseif ($j == 16-$i+2) {
        echo "<span>".($j-1)."</span>";
      }elseif ($i >= $j && $i <= 16-$j+1) {
        echo "<span>A</span>";
      }elseif ($j >= $i && $j >= 16-$i+1) {
        echo "<span>B</span>";
      }else {
        echo "<span>&nbsp;</span>";
      }
    } echo "<br>";
  }

 ?>
