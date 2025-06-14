<?php
$locale   = 'zh_CN.UTF-8';
$language = 'lang_zh-cn';
setlocale(LC_ALL, 'zh_CN.UTF-8');
require "/srv/quickbox/lang/lang_zh-cn.php";
if (file_exists("/srv/quickbox/lang/lang_zh-cn_override.php")) {
	require "/srv/quickbox/lang/lang_zh-cn_override.php";
}

function T(string $str): string {
	global $L;
	if (isset($L[$str])) {
		return $L[$str];
	} else {
		return $str;
	}
}
