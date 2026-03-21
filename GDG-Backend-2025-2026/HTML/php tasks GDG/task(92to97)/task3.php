<?php
date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";

$target = strtotime($date);
$days = $target / (60 * 60 * 24);
$years = $days / 365;

echo "From Epoch Time Till $date Is Approximately " . round($days, 1) . " Days<br>";
echo "From Epoch Time Till $date Is Approximately " . round($years, 1) . " Years";
?>