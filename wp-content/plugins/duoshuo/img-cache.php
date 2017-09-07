<?php
$src = $_GET['src'];

// Replace Gravatar to CN servers.
$src = preg_replace('/http:\/\/.+\.gravatar\.com/','http://cn.gravatar.com',$src);

// Timeout settings
$timeout = stream_context_create(array(
	'http' => array('timeout' => 1.0)
));  

// Do process for remote resource.
$data = file_get_contents($src, 0, $timeout);
header('Content-Type:image/png');
if(substr($data,0,3) === "\xFF\xD8\xFF" || substr($data,1,3) === "\x50\x4E\x47") {
	echo $data;
} else {
	echo file_get_contents(dirname(__FILE__)."/none.jpg", 0, $timeout);
}

// Copyright : https://geeku.net/1878.html
// Modifited : Pekaikon Norckon // 21-7-2015 // https://fcsys.us
?>