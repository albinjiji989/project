<?php
$file = isset($_GET['file']) ? $_GET['file'] : null;

if ($file && file_exists('../Assets/Files/Trainer/Upload/' . $file)) {
    header('Content-Type: application/pdf');
    readfile('../Assets/Files/Trainer/Upload/' . $file);
} else {
    echo 'File not found.';
}
?>