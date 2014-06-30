<?php include 'inc/header.php';?>

    <body>
	<?php include 'inc/nav.php';?>
<ul class="ui-list">  快速浏览
    <li class="ui-list-item"><a href="alice/">查看alice演示</a></li>
    <li class="ui-list-item"><a href="arale/">查看 Arale 演示 </a></li>
</ul>
	
<script>
		document.title += "--主页"; 
$(function(){
	$("#root_nav li:first").addClass("ui-nav-subitem-current");
});
//commit tag !
</script>
	</body>
</html>