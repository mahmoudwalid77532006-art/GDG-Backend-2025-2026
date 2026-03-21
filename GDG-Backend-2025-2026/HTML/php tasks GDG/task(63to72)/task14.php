<?php
$nums = [10, 100, -20, 50, 30];
$min = $nums[0];
foreach ($nums as $n) { if ($n < $min) $min = $n; }
echo $min;
?>