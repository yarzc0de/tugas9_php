<?php
/** Ahyar Dwi Setiawan
** Tugas : Latihan 9 Nomor 1 PHP
**/
$before = '0';
$after = '1';
echo $before." ".$after;
for($i=0; $i<20; $i++) {
  $output = $after+$before;
  echo " ".$output;
  $before = $after;
  $after  = $output;
}
?>