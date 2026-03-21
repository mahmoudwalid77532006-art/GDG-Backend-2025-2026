<?php
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

$mix = array_merge(array_slice($mix, 0, 3), $nums, array_slice($mix, -3));
print_r($mix);
?>