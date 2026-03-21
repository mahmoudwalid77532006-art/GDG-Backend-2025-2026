<?php
function greeting($name, $type = null) {
    if ($type === "Male") {
        $title = "Mr ";
    } elseif ($type === "Female") {
        $title = "Miss ";
    } else {
        $title = "";
    }
    return "Hello " . $title . $name;
}

echo greeting("Osama", "Male") . "\n";   // Hello Mr Osama
echo greeting("Eman", "Female") . "\n";  // Hello Miss Eman
echo greeting("Sameh") . "\n";           // Hello Sameh
?>