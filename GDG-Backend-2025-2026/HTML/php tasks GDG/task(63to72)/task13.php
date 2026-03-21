<?php
$nums = [10, 100, -20, 50, 30];
$max = $nums[0];
foreach ($nums as $n) { if ($n > $max) $max = $n; }
echo $max;
?>