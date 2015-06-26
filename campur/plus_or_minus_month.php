<?php
$endOfCycle = date("Y-m-d", strtotime("+1 month"));
//-----------------------------------------------------//

$time = strtotime("2014-05-25");
$diff_date = date("Y-m-d", strtotime("+1 month", $time));
?>