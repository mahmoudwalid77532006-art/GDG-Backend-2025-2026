<?php
$drives = ["C:/", "D:/"]; 
foreach ($drives as $drive) {
    $space = disk_total_space($drive) / (1024 ** 4); // من بايت → تيرابايت
    echo number_format($space, 2) . " Terabyte<br>";
}
?>