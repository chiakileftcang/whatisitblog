<?php
// Timeout settings
$timeout = stream_context_create(array(
	'http' => array('timeout' => 1.0)
));  

// Get remote resource If failed try local
header('Content-Type:text/javascript');
if(($data = file_get_contents("http://static.duoshuo.com/embed.js", 0, $timeout)) == NULL) {
	echo $data = file_get_contents(dirname(__FILE__)."/embed.js");
} else  {
	$data = str_replace("e.avatar_url","'https://blog.whatisit.cn/wp-content/plugins/duoshuo/img-cache.php?src='+e.avatar_url",$data);
	$data = str_replace("nt.data.default_avatar_url","'https://blog.whatisit.cn/wp-content/plugins/duoshuo/img-cache.php?src='+nt.data.default_avatar_url",$data);
	echo $data;
}

// Copyright: https://fcsys.us
?>