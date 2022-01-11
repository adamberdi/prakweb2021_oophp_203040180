<?php
/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/prakweb2021_oophp_203040180
Pertemuan 3 - 11 Januari 2022
Mempelajari Static Keyword pada PHP
*/
?>

<?php

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     return "Halo" . self::$angka++ . "kali.";
//   }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo" . self::$angka++ . "kali. <br>";
  }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();







?>