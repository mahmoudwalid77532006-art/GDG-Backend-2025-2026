<?php
$chars = ["A", "B", "C"];

// طريقة 1
$chars[] = "D";

// طريقة 2
array_push($chars, "D");

// طريقة 3
$chars = array_merge($chars, ["D"]);

// طريقة 4
array_splice($chars, count($chars), 0, "D");

print_r($chars);
?>