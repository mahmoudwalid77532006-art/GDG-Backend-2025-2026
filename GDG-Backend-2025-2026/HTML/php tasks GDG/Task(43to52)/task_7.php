<?php
function calculate_double(int $num_one, int $num_two) {
    return $num_one + $num_two + 0.0; // تحويل النتيجة إلى Double
}

echo calculate_double(20, 10) . "\n";          // 30
echo gettype(calculate_double(20, 10)) . "\n"; // double
?>