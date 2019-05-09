<?php
	$file = 'chaos-custom.css';
	$current = file_get_contents($file);
	$current .= 'Das ist ein Test';

	file_put_contents($file, $current);