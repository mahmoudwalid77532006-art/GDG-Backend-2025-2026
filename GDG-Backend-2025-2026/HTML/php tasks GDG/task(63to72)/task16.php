<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

$result = array_filter($mix, fn($n) => is_int($n) && $n % 2 !== 0);
sort($result);
print_r($result);

?>