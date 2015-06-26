<?php
$date=date('Y-m-d');
$date1 = new DateTime("2014-05-01");
$date2 = new DateTime("$date");
$interval = $date1->diff($date2);
$harga = "5000";
echo $interval->d." days ";
echo $denda = ($interval->d * $harga);
?>