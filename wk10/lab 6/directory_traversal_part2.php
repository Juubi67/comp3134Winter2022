<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path=isset($_GET['q']) ? $_GET['q'] : '.';

// mitigate the issue.
$path=basename($path);
$path=file_exists($path) ? $path : '.';
$path=str_contains($path, '..') ? '.' : $path;

print "<pre>";
print_r(scandir($path));
print "</pre>";
?>
