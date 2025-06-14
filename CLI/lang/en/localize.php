<?php
$locale   = 'en_US.UTF-8';
$language = 'lang_en';
setlocale(LC_ALL, 'en_US.UTF-8');
require "/srv/quickbox/lang/lang_en.php";
if (file_exists("/srv/quickbox/lang/lang_en_override.php")) {
	require "/srv/quickbox/lang/lang_en_override.php";
}

function T(string $str): string {
	global $L;
	if (isset($L[$str])) {
		return $L[$str];
	} else {
		return $str;
	}
}
