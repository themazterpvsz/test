<?php

for ($a=1; $a < 10 ; $a++) {
  for ($b=1; $b < 10; $b++) {
    if ($a == $b) {
      echo "*";
    } else {
      echo "&nbsp;";
    }
  }
  echo "<br/>";
}

 ?>
