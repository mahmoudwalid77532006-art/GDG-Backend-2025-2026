<?php
$index = 0;

// Using While
while ($index < 20) {
    $index++;
    if ($index % 2 == 0) {
        echo $index . "\n";
    }
}

// Using For
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "\n";
}

// Using Do While
$index = 2;
do {
    echo $index . "\n";
    $index += 2;
} while ($index <= 20);
?>