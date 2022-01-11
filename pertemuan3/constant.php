<?php
/*
Adam Berdi R. Adipati
203040180
https://github.com/adamberdi/prakweb2021_oophp_203040180
Pertemuan 3 - 11 Januari 2022
Mempelajari Constant pada PHP
*/
?>

<?php

// define('NAMA', 'Adam Berdi');

// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba
// {
//   const NAMA = 'Adam Berdi';
// }

// echo Coba::NAMA;

// echo __LINE__;
// echo "<br>";
// echo __FILE__;

// function Coba()
// {
//   return __FUNCTION__;
// }

// echo Coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
