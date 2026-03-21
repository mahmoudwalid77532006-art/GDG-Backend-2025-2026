<?php
function change_permissions($file) {
    if (!is_file($file)) return "This Is Directory And Only Files Allowed<br>";
    if (pathinfo($file, PATHINFO_EXTENSION) !== "txt") return "File Extension Is Not Txt<br>";

    chmod($file, 0700); // owner: rwx, others: no permissions
    return "Permissions Changed<br>";
}

// Test Cases
echo change_permissions("Elzero");       // Directory
echo change_permissions("Work.docx");    // Not txt
echo change_permissions("Result.txt");   // Permissions Changed
?>