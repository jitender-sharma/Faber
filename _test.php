<?php

date_default_timezone_set('Asia/Jakarta');

$date = $_GET['date'];
$datenum = strtotime(date($date));
$today = strtotime(date('m/d/Y'));

echo $datenum.' - '.$today; 

?>
