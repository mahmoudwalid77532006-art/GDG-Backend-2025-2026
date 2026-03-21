<?php
$a = "10";

// الطريقة 1
echo (int)$a;
echo "<br>";
var_dump((int)$a);

// الطريقة 2
echo intval($a);
echo "<br>";
var_dump(intval($a));

// الطريقة 3
settype($a, "integer");
echo $a;
echo "<br>";
var_dump($a);

// الطريقة 4
echo $a + 0;
echo "<br>";
var_dump($a + 0);

// الطريقة 5
echo (integer)$a;
echo "<br>";
var_dump((integer)$a);
?>