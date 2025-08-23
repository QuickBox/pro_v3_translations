<?php
$locale   = 'de_DE.UTF-8';
$language = 'lang_de';
setlocale(LC_NUMERIC, 'en_US.UTF-8');
require "/srv/quickbox/lang/lang_de.php";
if (file_exists("/srv/quickbox/lang/lang_de_override.php")) {
	require "/srv/quickbox/lang/lang_de_override.php";
}

function T(string $str): string {
	global $L;
	if (isset($L[$str])) {
		return $L[$str];
	} else {
		return $str;
	}
}
