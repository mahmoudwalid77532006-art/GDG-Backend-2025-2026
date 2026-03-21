<?php
$nums = [5, 10, 20, 5, 30, 40];

$result = array_sum(array_filter($nums, fn($n) => $n !== 5));
echo $result;
?>