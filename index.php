<?php include 'inc/header.php';?>

    <body>
	<?php include 'inc/nav.php';?>
<ul class="ui-list">  一级分类
    <li class="ui-list-item"><a href="alice/">查看alice演示</a></li>
    <li class="ui-list-item"><a href="arale/">查看 Arale 演示 </a></li>
</ul>

<ul class="ui-list">  alice演示
    <li class="ui-list-item">
		<?php print "<a href='$context/alice/list.php'; >列表</a> ";?>
	</li>
    <li class="ui-list-item">
		<?php print "<a href='$context/alice/add_page.php'; >新增</a> ";?>
	</li>
	 <li class="ui-list-item">
		<?php print "<a href='$context/alice/pop_tip.php'; >弹出提示</a> ";?>
	</li>
</ul>
	
<script>
		document.title += "--主页"; 
$(function(){
	$("#root_nav li:first").addClass("ui-nav-subitem-current");
});
</script>
	</body>
</html>