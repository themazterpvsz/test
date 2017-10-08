<style media="screen">
  span {
    display: inline-block;
    min-width: 15px;
  }
</style>

<?php
  for ($i=1; $i < 18 ; $i+=2) {
    for ($j=1; $j < 18 ; $j+=2) {
      if ($i >= $j) {
        echo "<span>$j</span> &nbsp;";
      } else {
        echo "<span>&nbsp;</span>";
      }
    } echo "<br>";
  }
 ?>

<!---
<?php
  for ($i=1; $i<=17; $i+=2) {
    for ($j=1; $j<=$i; $j+=2) {
      echo "<span>$j &nbsp;</span>";
    }
    echo "<br>";
  }
?>
--->
