<?php
$file = "elzero.txt";

// طريقة 1: file()
$lines = file($file, FILE_IGNORE_NEW_LINES);
echo $lines[0] . " " . $lines[1] . "<br>";

// طريقة 2: file_get_contents مع explode
$content = file_get_contents($file);
$linesArr = explode("\n", $content);
echo $linesArr[0] . " " . $linesArr[1] . "<br>";

// طريقة 3: fopen + fgets
$handle = fopen($file, "r");
$first = fgets($handle);
$second = fgets($handle);
echo trim($first) . " " . trim($second) . "<br>";

// طريقة 4: fread مع stream
rewind($handle);
$full = fread($handle, filesize($file));
$linesF = explode("\n", $full);
echo $linesF[0] . " " . $linesF[1] . "<br>";
fclose($handle);
?>