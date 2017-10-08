<style media="screen">
  span {
    display: inline-block;
    min-width: 20px;
  }
</style>

<?php
  function fib($n) {
    //angka pertama dan kedua
    $o = 0;
    $s = 1;

    //simpan string angka sekarang
    $hasil = "$s";

    for ($i=0; $i < $n-1 ; $i++) {

      //hitung fib
      $output = $s + $o;
      //simpan di $hasil
      $hasil = $hasil." $output";

      //siapkan angka untuk perhitungan berikutnya
      $o = $s;
      $s = $output;
    }
    return $hasil;
  }
    for ($i=1; $i < 10 ; $i++) {
      for ($j=1; $j < 10  ; $j++) {
        echo fib($j);
      } echo "<br>";
    }
 ?>
