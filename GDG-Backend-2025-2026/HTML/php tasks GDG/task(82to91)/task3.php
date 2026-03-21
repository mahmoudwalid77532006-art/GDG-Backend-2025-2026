<?php
$path = "Programming/PHP";

if (!is_dir($path)) {
    mkdir($path, 0711, true); // owner: read/write/exec, others: exec
} else {
    if (is_dir($path)) {
        rmdir($path);
        echo "$path Removed<br>";
    }
}

$parent = "Programming";
if (is_dir($parent) && count(scandir($parent)) == 2) { // فارغ
    rmdir($parent);
    echo "$parent Removed<br>";
}
?>