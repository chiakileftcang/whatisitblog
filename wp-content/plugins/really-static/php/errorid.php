<?php
 
if($id==1)$e= __("Funktion下的allow_url_fopen被禁用，且curl_init也许亦未激活!<br> 更多信息请参阅 <a href='http://sorben.org/really-static/fehler-allow_url_fopen.html'>帮助文档</a><br> Really-static已自动停用", 'reallystatic');
elseif($id==2)$e =__("也许你犯了一个错误，请参阅<a href='http://sorben.org/really-static/fehler-quellserver.html'>帮助文档</a>", 'reallystatic');
elseif($id==3)$e= __("Really-Static 没有在此目录写入的权限( $addinfo ) 或者此路径不存在.请参阅<a href='http://sorben.org/really-static/fehler-chmod.html'>帮助文档</a>", 'reallystatic');
else $e= "未知错误描述: '$id'";
echo $e;
RS_LOG($e);
?>