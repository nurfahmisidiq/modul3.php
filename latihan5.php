<?php
$day = date ("D");
switch ($day) {
  case 'sun': $hari = "Minggu"; break;
  case 'Mon': $hari = "Senin"; break;
  case 'Tue': $hari = "Selasa"; break;
  case 'wed': $hari = "Rabu"; break;
  case 'Thu': $hari = "Kamis"; break;
  case 'Fri': $hari = "Jum'at"; break;
  case 'Sat': $hari = "Sabtu"; break;
  default   : $hari = "natal";
}
echo "Sekarang hari <b>$hari</b>";
?>
