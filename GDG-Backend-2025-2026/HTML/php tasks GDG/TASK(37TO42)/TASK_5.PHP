<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = 0; $i < count($mix); $i++) {
    if ($mix[$i] != 1 && is_numeric($mix[$i])) {
        echo $mix[$i] . "\n";
    }
}
?>