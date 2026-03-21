<?php
// الأصل
echo time() . "<br>";

// الطريقة 1
echo strtotime("now") . "<br>";

// الطريقة 2
echo (new DateTime())->getTimestamp() . "<br>";

// الطريقة 3
echo mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
?>