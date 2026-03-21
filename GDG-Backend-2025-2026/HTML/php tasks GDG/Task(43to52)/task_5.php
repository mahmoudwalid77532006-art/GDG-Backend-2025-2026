<?php
function check_status($a, $b, $c) {
    $name = $age = $available = null;

    foreach ([$a, $b, $c] as $value) {
        if (is_string($value)) $name = $value;
        if (is_int($value) || is_float($value)) $age = $value;
        if (is_bool($value)) $available = $value;
    }

    $status = $available ? "Available For Hire" : "Not Available For Hire";
    return "Hello $name, Your Age Is $age, You Are $status";
}

echo check_status("Osama", 38, true) . "\n";
echo check_status(38, "Osama", true) . "\n";
echo check_status(true, 38, "Osama") . "\n";
echo check_status(false, "Osama", 38) . "\n";
?>