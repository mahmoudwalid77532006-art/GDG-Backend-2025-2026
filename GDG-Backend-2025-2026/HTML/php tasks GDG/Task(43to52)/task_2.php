<?php
function get_arguments(...$args) {
    // طريقة 1: استخدام implode
    $all = implode(" ", $args);

    // طريقة 2: استخدام حلقة foreach
    // $all = "";
    // foreach ($args as $arg) {
    //     $all .= $arg . " ";
    // }
    // $all = trim($all);

    return $all;
}

echo get_arguments("Hello", "Elzero", "Web", "School") . "\n"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP") . "\n";                // I Love PHP
?>