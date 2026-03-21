<?php
date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";

$start = new DateTime("@0"); // Epoch Time
$end = new DateTime($date);

$diff = date_diff($start, $end);

echo "From Epoch Time Till $date Is Approximately " . $diff->days . " Days<br>";
echo "From Epoch Time Till $date Is Approximately " . floor($diff->days / 365) . " Years";
?>