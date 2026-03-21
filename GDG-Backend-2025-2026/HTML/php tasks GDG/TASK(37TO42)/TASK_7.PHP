<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$numCount = 0;
$letterCount = 0;

foreach ($mix as $item) {
    if (is_numeric($item)) {
        echo $item . "\n";
        $numCount++;
    } else {
        $letterCount++;
    }
}

echo "\"$numCount Numbers Printed\"\n";
echo "\"$letterCount Letters Ignored\"\n";
?>