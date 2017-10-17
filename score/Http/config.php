<?php
// httpserver的配置
return [
	'application_index' => 'Swoolefy\\App\\Application',
	'start_init' => 'Swoolefy\\Http\\StartInit',
	'master_process_name' => 'php-http-master',
	'manager_process_name' => 'php-http-manager',
	'worker_process_name' => 'php-http-worker',
	'www_user' => 'www',
	'host' => '0.0.0.0',
	'port' => '9502',
	'time_zone' => 'Asia/Shanghai',
	'gzip_level' => 2,
	'include_files' =>[],
	'setting' => [
		'dispatch_mode' => 3,
		'reload_async' => true,
	],

	// 是否内存化线上实时任务
	'table_tick_task' => true,
	
];