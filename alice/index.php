<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';	?>
	
	<ul class="ui-list">
    <li class="ui-list-item"><a href="list.php">列表页面</a></li>
    <li class="ui-list-item"><a href="add_page.php">新增表单页面</a></li>
    <li class="ui-list-item"><a href="pop_tip.php">弹出提示语</a></li>
   </ul>

<script>
	document.title += "-- Alice"; 
	$(function(){
		$("#alice_nav li:eq(0)").addClass("ui-nav-subitem-current");
	});
</script>
<?php include '../inc/footer.php';?>