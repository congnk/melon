<?php include '../inc/header.php';?>


	<?php include '../inc/nav.php';
	?>
	
	<ul class="ui-list">
		<li class="ui-list-item"><a href="calendar.php">日历</a></li>
		<li class="ui-list-item"><a href="detector.php">Detector</a></li>
		<li class="ui-list-item"><a href="qrcode.php">二维码</a></li>
		<li class="ui-list-item"><a href="autocomplete.php">自动补齐</a></li>
		<li class="ui-list-item"><a href="area.php">地区插件</a></li>
		<li class="ui-list-item"><a href="fileUpload.php">上传演示</a></li>
		<li class="ui-list-item"><a href="fileServer.php">文件服务器</a></li>
	</ul>
<script>
	
	$(function(){
		$("#arale_nav li:eq(0)").addClass("ui-nav-subitem-current");
	});
</script>
<?php include '../inc/footer.php';?>