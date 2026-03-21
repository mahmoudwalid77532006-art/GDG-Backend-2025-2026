<?php
$file = "video.mp4"; 

$sizeBytes = filesize($file);
$sizeMB = round($sizeBytes / (1024 ** 2)); // بايت → ميجا
$sizeKB = round($sizeBytes / 1024);       // بايت → كيلو

echo "Size In Megabyte Is $sizeMB<br>";
echo "Size In Kilobyte Is $sizeKB<br>";
?>
