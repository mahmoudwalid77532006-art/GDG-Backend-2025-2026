<?php
function calculate($num1, $num2, $op = "add") {
    $op = strtolower($op);
    if ($op === "a" || $op === "add") return $num1 + $num2;
    if ($op === "s" || $op === "subtract") return $num1 - $num2;
    if ($op === "m" || $op === "multiply") return $num1 * $num2;
    return "Operation Not Found";
}

echo calculate(10, 20) . "\n";          // 30
echo calculate(10, 20, "a") . "\n";     // 30
echo calculate(10, 20, "s") . "\n";     // -10
echo calculate(10, 20, "subtract") . "\n"; // -10
echo calculate(10, 20, "multiply") . "\n"; // 200
echo calculate(10, 20, "m") . "\n";        // 200
?>