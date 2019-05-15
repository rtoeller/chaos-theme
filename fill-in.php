<?php
$file =  $_SERVER['DOCUMENT_ROOT'].'/wordpress/wp-content/themes/twentynineteen/chaos-custom.css';
$current = file_get_contents($file);
$current .= 'Noch ein Test';
echo 'aufruf1';
file_put_contents($file, $current);