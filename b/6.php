<style media="screen">
  span {
    display: inline-block;
    min-width: 30px;
  }
</style>

<?php
  for ($i=18; $i > 0 ; $i-=2) {
    for ($j=2; $j < 19 ; $j+=2) {
      if ( $j >= $i) {
        echo "<span>".($i-2)."</span> &nbsp;";
      } else {
        echo "<span>&nbsp;</span>";
        }
  } echo "<br>";
}
 ?>
