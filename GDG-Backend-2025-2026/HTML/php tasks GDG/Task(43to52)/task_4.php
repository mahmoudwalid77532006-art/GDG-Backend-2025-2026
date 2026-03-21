<?php
function multiply(...$args) {
    $result = 1;
    foreach ($args as $arg) {
        if (is_string($arg)) continue;
        if (is_float($arg)) $arg = (int)$arg;
        $result *= $arg;
    }
    return $result;
}

echo multiply(10, 20) . "\n";            // 200
echo multiply("A", 10, 30) . "\n";       // 300
echo multiply(100.5, 10, "B") . "\n";    // 1000
?>