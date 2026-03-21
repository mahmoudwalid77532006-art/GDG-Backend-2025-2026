<?php
$greet = function($name) {
    return "Greetings $name";
};

$greet_arrow = fn($name) => "Greetings $name";

echo $greet("Osama") . "\n";        // Greetings Osama
echo $greet_arrow("Osama") . "\n";  // Greetings Osama
?>