<?php
$filters = filter_list();
$result = [];
foreach ($filters as $id => $name) {
    $result[filter_id($name)] = $name;
}
print_r($result);
?>