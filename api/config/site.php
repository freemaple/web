<?php

return [
	// 站点简码
	'site_code' => 'TP',
	'ga_open' => false,
	'secure' => false,
	// 站点名称
	'site_name' => '',
	//版本
	'version' => env('version', time()),
	//活动、设计图片域名
	'site_image' =>  [
		'local' => 'http://192.168.1.102:8081',
		'production' => ''
	],
	'storage' => [
		'local' => '',
		'production' => ''
	],
	'test_vip' => env('test_vip', '0'),
	'test_store' => env('test_store', '0'),
	'baidu_key' => env('BAIDUKEY', ''),
];