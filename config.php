<?php
	$siteinfo = array(
		"site_name"	=>	"<i class='fa fa-sitemap' aria-hidden='true'></i> Mdo",
		"title"		=>	"Mdo 目录列表",
		"keywords"	=>	"Mdo,目录列表,目录索引",
		"description"	=>	"Mdo 目录列表。"
	);

	//需要忽略的目录
	$ignore	= array(
		".",
		".git",
		".user.ini",
		".htaccess",
		"favicon.ico",
		"functions",
		"config.php",
		"index.php",
		"static",
		"LICENSE",
		"template",
		"cache.php",
		"indexes.php",
		"Procfile",
		"composer.json",
		"vendor",
		".htaccess.bak",
		".composer",
		".heroku",
		".profile.d",
		".gitattributes",
		"zdir"
	);
	//设置参数
	$config = array(
		//thedir为需要读取的目录，如:/data/wwwroot/soft.xiaoz.org，仅将zdir放在子目录的情况下需要配置此项，其它请勿配置此选项
		"thedir"	=>	'',
		"allowip"	=>	array(
			//"0.0.0.0",
			"::1",
			"127.0.0.1",
			"192.168.1."
		),
		"username"	=>	"admin",			//用户名
		"password"	=>	"8@HrSxFaT",		//密码
		"auth"		=>	FALSE			//是否开启访问验证
	);	
?>