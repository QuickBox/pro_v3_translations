<?php
$locale   = 'fr_FR.UTF-8';
$language = 'lang_fr';
setlocale(LC_ALL, 'fr_FR.UTF-8');
require "/srv/quickbox/lang/lang_fr.php";
if (file_exists("/srv/quickbox/lang/lang_fr_override.php")) {
	require "/srv/quickbox/lang/lang_fr_override.php";
}

function T(string $str): string {
	global $L;
	if (isset($L[$str])) {
		return $L[$str];
	} else {
		return $str;
	}
}
