<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';?>
	
	<div style="padding:40px 0px 80px 10%">
		<div>
			二维码内容：<input id="qr_text" style="width:400px" value = "http://192.168.5.42:88/php/melon/arale/qrcode.php" type = "text" />
			<input type="button" id = "generate" value="刷新" />
			
		</div>
		<div id="qrcodeDefault" style="margin:10px"></div>
	</div>
	<span>注意，此版本二维码插件只支持ASCII字符</span>
<script>
document.title += "--二维码"; 

$(function(){
	genQrCode();
	$("#generate").click(function(){
		genQrCode();
	});
	
});
	function genQrCode(){
		seajs.use(['$','qrcode'], function($, qrcode){
			var qrnode = new qrcode({
				render: "table",
				correctLevel: 1,
				text: $("#qr_text").val(),
				width: 220,
				height: 220
			});
			$('#qrcodeDefault').empty();
			$('#qrcodeDefault').append(qrnode);
		});
	}
</script>
<?php include '../inc/footer.php';?>