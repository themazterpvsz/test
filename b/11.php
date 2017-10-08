  <style media="screen">
    span {
      display: inline-block;
      min-width: 20px;
    }
  </style>

  <?php
  $num = 10;

  function fib($num) {
    if ($num <= 1) {
      return $num;
    } else {
      return (fib($num-2) + fib($num-1));
    }
  }

  for ($i=1; $i < $num ; $i++) {
      for ($j=1; $j < $num; $j++) {
        echo "<span>".fib($i)."</span>";
      } echo "<br>";
  }

   ?>
