<?php
$locale   = 'pt_PT.UTF-8';
$language = 'lang_pt';
setlocale(LC_ALL, 'pt_PT.UTF-8');
require "/srv/quickbox/lang/lang_pt.php";
if (file_exists("/srv/quickbox/lang/lang_pt_override.php")) {
	require "/srv/quickbox/lang/lang_pt_override.php";
}

function T(string $str): string {
	global $L;
	if (isset($L[$str])) {
		return $L[$str];
	} else {
		return $str;
	}
}
