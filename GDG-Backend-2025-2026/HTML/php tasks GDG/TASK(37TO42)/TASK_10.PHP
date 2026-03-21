<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$count = count($nums);

foreach ($nums as $index => $num) {
    $pair = $nums[$count - 1 - $index];
    echo "\"$num + $pair = " . ($num + $pair) . "\"\n";
}
?>