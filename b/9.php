<style media="screen">
  span {
    display: inline-block;
    min-width: 20px;
  }
</style>

<?php
  function fib($n) {  // function fibonacci nya dimari
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
    return $hasil ."<br>"; // ini buat nampilin hasilnya
  }
  $pengulangan = 0;

  while ($pengulangan < 10) {
    echo fib(10);

    $pengulangan = $pengulangan +1;
  }

 ?>
