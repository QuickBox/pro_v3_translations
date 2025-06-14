<?php
$locale   = 'es_ES.UTF-8';
$language = 'lang_es';
setlocale(LC_ALL, 'es_ES.UTF-8');
require "/srv/quickbox/lang/lang_es.php";
if (file_exists("/srv/quickbox/lang/lang_es_override.php")) {
	require "/srv/quickbox/lang/lang_es_override.php";
}

function T(string $str): string {
	global $L;
	if (isset($L[$str])) {
		return $L[$str];
	} else {
		return $str;
	}
}
