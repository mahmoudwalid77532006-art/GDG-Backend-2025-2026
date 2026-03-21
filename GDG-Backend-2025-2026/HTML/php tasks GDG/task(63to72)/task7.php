<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names); // "Ahmed"
next($names); // "Sayed"
echo current($names) . "<br>"; // "Sayed"

next($names); // "Mahmoud"
next($names); // "Ali"
echo current($names) . "<br>"; // "Ali"

reset($names);
echo current($names) . "<br>"; // "Osama"

next($names); // "Ahmed"
next($names); // "Sayed"
next($names); // "Mahmoud"
echo current($names) . "<br>"; // "Mahmoud"
?>