<?php
$nums = [10, 20, 30];

// باستخدام array_reduce
echo array_reduce($nums, fn($carry, $item) => $carry + $item) . "<br>";

// باستخدام array_sum
echo array_sum($nums);
?>