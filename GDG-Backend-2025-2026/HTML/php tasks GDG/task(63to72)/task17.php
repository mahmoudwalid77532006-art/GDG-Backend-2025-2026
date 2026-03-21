<?php
$nums = [1, 2, 3, 4, 5, 6];
$shuffled = [];
while (count($nums)) {
    $index = rand(0, count($nums) - 1);
    $shuffled[] = $nums[$index];
    array_splice($nums, $index, 1);
}
print_r($shuffled);
?>