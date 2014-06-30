<?php include 'inc/header.php';?>

    <body>
	<?php include 'inc/nav.php';?>
	
<ul class="ui-list">  这页打算做一个可能混合两种模块的功能
    <li class="ui-list-item"><a href="">查看</a></li>
    <li class="ui-list-item"><a href="">查看</a></li>
</ul>
	
<script>
		document.title += "-- Note"; 
$(function(){
	$("#root_nav li:eq(1)").addClass("ui-nav-subitem-current");
});
</script>
	</body>
</html>