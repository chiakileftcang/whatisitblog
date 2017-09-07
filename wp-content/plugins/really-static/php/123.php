<?php
#echo "<pre>";
#print_R($_POST);
#echo "</pre>";
#ison(!@touch(REALLYSTATICHOME."static/")),1,"red","green")
global $ison;
$ison=0;
if($_POST["pos"]==""){




	echo "<h1>".__("Really-Static 快速开始", 'reallystatic')."</h1><b>";
	echo __("感谢您选择Really-Static！这个配置向导会支持你选择合适的设置。", 'reallystatic');
	echo '</b><br /><br /><form method="post">
	<table><tr><td width="300px"><input type="hidden" name="pos" value="1" /><input type="hidden" name="datawasgeneratet" value="'.$_POST[datawasgeneratet].'" />
	如果你想尝试纯静态就选择这个！<br>所有的静态文件存储到缓存文件夹，并没有WordPress的设置被更改。<br><br>
	
	<input name="test" type="submit" value="'.__('运行really-static以测试模式', 'reallystatic').'"  style="height: 400px; width: 400px" />
	</td><td  width="10px"><span style="font-size:50px;">或</span>
	</td><td  width="300px">
	如果你知道你所安装的WordPress该如何支持纯静态，就选择这个。<br>←[如果你没有使用纯静态的经验，在此之前最好先使用测试方案。]
	
	<input name="live" type="submit" value="'.__('运行really-static以正式模式', 'reallystatic').'"  style="height: 400px; width: 400px" />
	</td></tr></table></form>
	
	';
		
	
 
}elseif($_POST["pos"]=="1"){	
		echo "<br><h2>".__("第2步：设置存储位置", "reallystatic")."</h2>";
		echo '<script type="text/javascript" src="' . REALLYSTATICURLHOME . 'sonstiges/admin_2.js"></script>';
		echo '<h2>请选择一个方式和存储路径，其中产生的文件应保存：</h2><form method="post">';


		if($_POST[test]!=""){
			#echo "<hr>GEN FOR TEST";
			$_POST[datawasgeneratet]=1;

			update_option('rs_save',"local"); 
			update_option ( 'rs_lokalerspeicherpfad', REALLYSTATICHOME.'static/');
			update_option ( 'rs_remoteurl', REALLYSTATICURLHOME.'static/');
			update_option("home",get_option('siteurl') );
			
			update_option ( 'rs_designlocal', get_bloginfo('template_directory')."/");
		update_option ( 'rs_designremote', get_bloginfo('template_directory')."/");
		update_option ( 'rs_localurl',get_option('siteurl')."/");

		}
		elseif($_POST[live]!=""){
			#echo "<hr>GEN FOR LIFE";
			$_POST[datawasgeneratet]=1;
			update_option('rs_save',"local") ;
			update_option ( 'rs_lokalerspeicherpfad', REALLYSTATICHOME.'static/');
			update_option ( 'rs_remoteurl', REALLYSTATICURLHOME.'static/');
			update_option("home",REALLYSTATICURLHOME."static" );
			update_option ( 'rs_designlocal', get_bloginfo('template_directory')."/");
			update_option ( 'rs_designremote', get_bloginfo('template_directory')."/");
			update_option ( 'rs_localurl',get_option('siteurl')."/");
		}
		$dest=apply_filters ( "rs-adminmenu-transport",array());
 
		$desti='';
		foreach($dest as $v){
			$desti.='<input type="radio" onchange="hideshowupload(this);" name="realstaticspeicherart" value="'.$v[name].'" '.ison(loaddaten ( "rs_save"),3,'checked ','',$v[name]).'id="fp'.$v[name].'"><label for="fp'.$v[name].'">'.$v[title].'</label><br><div id="shower'.$v[name].'">'.$v[main]."</div>";
		}
		echo $desti;
 
	
		#}
				echo "<br><h2>在此之后，请定义游客在这里有浏览此文件之权限：</h2>";
				echo '<input name="rs_remoteurl" type="text" size="90" value="'.loaddaten ( "rs_remoteurl" , 'reallystatic').'">';
				
				echo "<br><br>";
	echo '<input type="hidden" name="pos" value="2" /><input type="hidden" name="datawasgeneratet" value="'.$_POST[datawasgeneratet].'" /><input name="Submit1" type="submit" value="'.__('下一步 >>', 'reallystatic').'" /></form>';
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

}elseif($_POST["pos"]=="2"){
if($_POST ['realstaticspeicherart']!=""){
	apply_filters("rs-adminmenu-savealltransportsettings","");
	update_option ( 'rs_save', $_POST ['realstaticspeicherart'] );
update_option ( 'rs_remoteurl', $_POST ['rs_remoteurl'] );

if(	get_option("home")==REALLYSTATICURLHOME."static" ){
	update_option("home", $_POST ['rs_remoteurl'] );
}
}

	echo "<h2>".__("第3步：检查写入权限，并尝试创建，读取和删除文件", 'reallystatic')."</h2>";
	echo '<table width="400px" height="100px"><tr><td style="text-color: white; font-size:25px; background-color:'.ison(is_writable(LOGFILE),1,"green","red").';">'.__('日志文件写入权限','reallystatic').'</td> </tr></table>';
	
	echo '<table width="400px" height="100px"><tr><td style="text-color: white; font-size:25px; background-color:'.ison(is_readable(LOGFILE),1,"green","red").';">'.__('日志文件写入权限','reallystatic').'</td> </tr></table>';
		
	 
	
	$isonn=reallystatic_testdestinationsetting(true);

	echo '<table  width="400px" height="100px"><tr><td style="text-color: white; font-size:25px; background-color:'.ison($isonn==true,1,"green","red").';">'.__("尝试写/读/删除文件", 'reallystatic').'</td> </tr></table>';
	global $ison;
 
	if($ison==3)echo '<form method="post"><input type="hidden" name="datawasgeneratet" value="'.$_POST[datawasgeneratet].'" /><input type="hidden" name="pos" value="3" /><input name="Submit1" type="submit" value="'.__('下一步 >>', 'reallystatic').'" /></form>';
	else echo '<form method="post"><input type="hidden" name="datawasgeneratet" value="'.$_POST[datawasgeneratet].'" /><input type="hidden" name="pos" value="1" /><input name="Submit1" type="submit" value="'.__('上一步 <<', 'reallystatic').'" /></form><form method="post"><input type="hidden" name="datawasgeneratet" value="'.$_POST[datawasgeneratet].'" /><input type="hidden" name="pos" value="2" /><input name="Submit1" type="submit" value="'.__('刷新', 'reallystatic').'" /></form>';

}elseif($_POST["pos"]=="3"){
	echo "<h2>".__("第4步：生成您当前的网站进入 ", 'reallystatic')."</h2>";
	echo __("Really-static现在已准备好使用.", 'reallystatic');
	echo '<form  method="post" id="my_fieldset"><input type="hidden" name="strid2" value="rs_refresh" />
	<input type="hidden" name="hideme" value="hidden" /><input type="hidden" name="datawasgeneratet" value="'.$_POST[datawasgeneratet].'" />
	<input type="hidden" name="pos" value="4" />
	<input type="submit" value="'.__("开始生成文件...这将需要一些时间", 'reallystatic').'"></form><a href="options-general.php?page='.$base.'">'.__('或进入设置页面', 'reallystatic').'</a>';
}elseif($_POST["pos"]=="4"){
 

$lastposts = get_posts ( 'numberposts=1 ' );
foreach ( $lastposts as $post ) {
	$r=get_permalink ( $post->ID );
	$r=loaddaten( "rs_remoteurl" ).str_replace(get_option('home')."/","",nonpermanent($r));
}
  
echo "<hr><div id='refreshallinfo'>Really-static 正在生成<br>请稍等!</div>";
echo " <div class='tabs' id='tabs' style='display: none'><br><b>";
echo __("OK，准备好了！", 'reallystatic');
echo "</b><br>";
echo sprintf(__("您的静态文件都在这里: <a target='_blank' href='%s'>%s</a>", 'reallystatic'), loaddaten( "remoteurl" ), loaddaten( "remoteurl" ));
echo "<br>";
echo "<br>";
echo __("在你的服务器中的本地文件: ", 'reallystatic'). loaddaten( "rs_lokalerspeicherpfad" );
echo "<br>";
echo "<br>";
echo sprintf(__("例如: <a target='_blank' href='%s'>%s</a>", 'reallystatic'),$r,$r);
if(really_static_demodetect())echo "<br><br>"."请记住，当前纯静态是在演示模式下运行。如果希望从更快的载入时间于您的网站的每一位访客，则需要重新配置 really-static";
echo "<br>玩得开心，请不要忘记捐款！</div>";

 really_static_rebuildentireblog();
	reallystatic_configok ( __ ( "文件扫描完成", 'reallystatic' ), 2 );	

}else die("error");
?>