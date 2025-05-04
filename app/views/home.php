<?php
$sections = $data['sections'];

foreach ($sections as $index => $section) {
    $file = __DIR__ . "/home/section" . ($index + 1) . ".php";
    if (file_exists($file)) {
        include $file;
    }
}

include __DIR__ . '/home/register.php';
?>
