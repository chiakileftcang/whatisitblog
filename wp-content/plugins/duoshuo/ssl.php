<?php
ob_start();
$src = $_GET['s'];
$src = preg_replace('/http:\/\/.+\.gravatar\.com/', 'http://cn.gravatar.com', $src);
$timeout = stream_context_create(array(
 'http' => array(
  'timeout' => 1.0
 )
));
$data = file_get_contents($src, 0, $timeout);
if ($src != 'null') {
 header('Content-Type:image/png');
 if (substr($data, 0, 3) === "\xFF\xD8\xFF" || substr($data, 1, 3) === "\x50\x4E\x47") {
  echo $data;
 } else {
  echo file_get_contents(dirname(__FILE__) . "/none.jpg", 0, $timeout);
 }
} else {
 echo file_get_contents(dirname(__FILE__) . "/none.jpg", 0, $timeout);
}