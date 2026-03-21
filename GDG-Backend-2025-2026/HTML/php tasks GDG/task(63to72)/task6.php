<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

print_r(array_merge($chars, array_fill($zero, strlen($char) * strlen($char), "@")));
?>