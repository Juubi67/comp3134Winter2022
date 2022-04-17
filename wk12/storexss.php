<?php
$xssfile = fopen("storedxss.txt", "r");
echo fread($xssfile, filesize("storedxss.txt"));
fclose($xssfile);
?>