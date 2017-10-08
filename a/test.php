<style media="screen">
  span {
    display: inline-block;
    min-width: 10px;
  }
</style>

<?php
  for ($i=1; $i <9 ; $i++) {
    for ($j=1; $j <9 ; $j++) {
      if ($i >= $j || $j >= $i) {
       echo "123";
     } else {
       echo "&nbsp;";
     }
   } echo "<br>";
  }

 ?>
