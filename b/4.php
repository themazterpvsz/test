<style media="screen">
  span {
    display: inline-block;
    min-width: 15px;
  }
</style>

<?php
  for ($i=1; $i < 18 ; $i+=2) {
    for ($j=1; $j < 18 ; $j+=2) {
      if ( $j == 9) {
        echo "<span>$i </span>";
      }elseif ($i == $j) {
          echo "<span>$i  </span>";
        }elseif ($j == 16-$i+2) {
          echo "<span>".($j-1)."</span>";
        }elseif ($j == $i||$i == 9 ) {
            echo "<span>".($j-1)."&nbsp; </span>";
      }else {
        echo "<span>&nbsp;</span>";
      }
    } echo "<br>";
  }

 ?>
