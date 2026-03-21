<?php
echo basename(__FILE__) . "<br>";
echo pathinfo(__FILE__, PATHINFO_BASENAME) . "<br>";
echo $_SERVER['SCRIPT_NAME'] ? basename($_SERVER['SCRIPT_NAME']) : '' . "<br>";
echo $_SERVER['PHP_SELF'] ? basename($_SERVER['PHP_SELF']) : '' . "<br>";
?>