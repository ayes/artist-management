<?php

function con2mysql($date) {
  $date = explode("-",$date);
  if ($date[0]<=9) { $date[0]=$date[0]; }
  if ($date[1]<=9) { $date[1]=$date[1]; }
  $date = array($date[2], $date[1], $date[0]);
 
 return $n_date=implode("-", $date);
 }
 
?>
