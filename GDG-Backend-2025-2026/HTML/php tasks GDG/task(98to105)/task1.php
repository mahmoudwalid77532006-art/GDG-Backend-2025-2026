<?php
$expire = time() + (60 * 60 * 24 * (30 * 2 + 5)); // شهرين + 5 أيام

setcookie("site[color]", "blue", $expire, "/");
setcookie("site[font]", "Swat", $expire, "/");
setcookie("site[layout]", "boxed", $expire, "/");
?>