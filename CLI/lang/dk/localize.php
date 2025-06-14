<?php
$locale   = 'da_DK.UTF-8';
$language = 'lang_dk';
setlocale(LC_NUMERIC, 'en_US.UTF-8');
require "/srv/quickbox/lang/lang_dk.php";
if (file_exists("/srv/quickbox/lang/lang_dk_override.php")) {
	require "/srv/quickbox/lang/lang_dk_override.php";
}

function T(string $str): string {
	global $L;
	if (isset($L[$str])) {
		return $L[$str];
	} else {
		return $str;
	}
}
