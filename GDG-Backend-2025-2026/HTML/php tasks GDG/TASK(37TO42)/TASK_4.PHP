<?php
$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i >= $stop; $i--) {
    if ($i < 10) {
        echo "0" . $i . "\n";
    } else {
        echo $i . "\n";
    }
}
?>