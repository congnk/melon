<script>

$(function(){
<?php 
# and this '#' makes this a PHP comment.  
  
	$full_path = getenv("REQUEST_URI"); 
  
	$root = dirname($full_path); 
	$file_name = basename($full_path);
	
	$fn_len = strlen($file_name);

	$alice_pos = strripos($full_path,"alice");
	$arale_pos = strripos($full_path,"arale");
		
	$is_alice =  false ;
	$is_arale = false ;
	
	if($alice_pos > 0 && $arale_pos == 0){
		$is_alice =  true ;
	}
	
	if($alice_pos == 0 && $arale_pos > 0 ) {
		$is_arale = true ;
	
	};
	
	if( !$is_alice && !$is_arale  ){
		print "$('#root_nav').addClass('ui-nav-item-current');" ;
	}else if( $is_alice ){
		echo "$('#alice_nav').addClass('ui-nav-item-current');" ;		
	}else if( $is_arale ){
		print "$('#arale_nav').addClass('ui-nav-item-current');" ;
	}
	
?>
});

$(function(){
	//实现自动根据url标记当前选中项
	var loc= window.location.pathname ;
	$("li.ui-nav-item-current li").each(function(){
		var a= $(this).find("a").attr("href") ;
		if(loc.indexOf( a ) != -1 ){
			$(this).addClass("ui-nav-subitem-current");
		}
	});
});
</script>

<style>
.content {
    margin: 0 auto;
    width: 100%;
}

</style>

<div class="ui-nav">
  <ul class="ui-nav-main">
	<li id="root_nav" class="ui-nav-item ">
	  <a href="/php/melon/">主菜单</a>
	  <ul class="ui-nav-submain">
		<li class="ui-nav-subitem "><a href='<?php print "$context/index.php"; ?>'>快速导航</a></li>
		<li class="ui-nav-subitem"><a href='<?php print "$context/note.php"; ?>'>混合内容</a></li>
		<li class="ui-nav-subitem"><a href="#">杂七杂八</a></li>
	  </ul>
	</li>
	<li id="alice_nav" class="ui-nav-item">
	  <a href="/php/melon/alice/">Alice 演示</a>
	  <ul class="ui-nav-submain">
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/alice/index.php'; >目录</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/alice/list.php'; >列表</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/alice/add_page.php'; >新增</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/alice/pop_tip.php'; >弹出提示</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/alice/pop_tip.php'; >弹出提示</a> ";?>
		</li>
	  </ul>
	</li>
	<li id="arale_nav" class="ui-nav-item">
	  <a href="/php/melon/arale">Arale 演示</a>
	  <ul class="ui-nav-submain">
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/index.php'; >功能目录</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/fileServer.php'; >文件中转</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/calendar.php'; >日历</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/detector.php'; >Detector</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/qrcode.php'; >二维码</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/autocomplete.php'; >自动补齐</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/area.php'; >地区插件</a> ";?>
		</li>
		<li class="ui-nav-subitem">
		<?php print "<a href='$context/arale/fileUpload.php'; >上传演示</a> ";?>
		</li>
	  
	  </ul>
	</li>
	<li class="ui-nav-item"><a href="#">一级导航 4</a></li>
  </ul>
  <div class="ui-nav-subcontainer"></div>
</div>
		
	<div class="content">

	
