<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';?>
	
<style type="text/css">
.cell{
	width:600px;
}
.cell .ui-step{
	padding:0;
}
.ui-step-line{
	width:0%;
}
.ui-step li {
	height:17px;
}
.cell .ui-tipbox {
	display:none;
}
.ui-tipbox{
	margin:10px 0;
}

</style>

	<div style="padding:40px 0px 80px 10%">
		<div>
			<div class="cell" >
			<p>
				  <button id="uploader_1" class="ui-button ui-button-lgreen">点我上传</button>
			  <span id="upload-2-text"></span></p>
				
				<div class="ui-tipbox ui-tipbox-success">
					<div class="ui-tipbox">
						<h3 class="ui-tipbox-title"></h3>
						<p class="ui-tipbox-explain">
							<span ><span>
							<ol class="ui-step ui-step-2">
								<li class="ui-step-start ui-step-done">
									<div class="ui-step-line">-</div>
								</li>
							</ol>
						</p>
						
					</div>
					
				</div>
				
			</div>
			<div id="thumbnails">
				<?php
					// Read the files from the saved images folder
					$dir = new DirectoryIterator("../upload");
					foreach ($dir as $fileinfo) {
						if (!$fileinfo->isDot() && $fileinfo->isFile()) {
							$iname = iconv("gb2312","UTF-8", $fileinfo->getFilename()) ;
							echo '<img width=400px  style="margin: 5px;  vertical-align: middle;" src="../upload/' .  $iname . '" title=' . $iname . ' />';
						}
					}
				?>
			</div>
		</div>
		<div id="qrcodeDefault" style="margin:10px"></div>
	</div>

<script>
document.title += "--文件上传"; 
seajs.use(['$', 'upload'], function($, Uploader) {
 new Uploader({
      trigger: '#uploader_1',
      accept: 'image/*',
      action: 'upload.php',
	  progress: function(e, position, total, percent, files) {
			$(".cell .ui-tipbox").css({"display":"block"});
			$(".ui-step-line").css({"width":percent+"%"});
			$(".ui-tipbox-explain span").html(percent+"%");
			if(percent == 100){
				//$(".ui-tipbox-icon").css({"display":"block"});
				 $(".ui-tipbox-title").html( files[0].name + " 上传成功");
			}
	  },
	  name: "Filedata"
    }).change(function(files) {
    for (var i=0; i<files.length; i++) {
        $(".ui-tipbox-title").html(files[0].name + " 正在上传");
    }
    // Default behavior of change is
     this.submit();
	}).success(function(data) {
		var JSONObject = jQuery.parseJSON( data); 
	
		if( JSONObject.result == "true"){
			var img = document.createElement("img");
			$(img).attr({
				"width":"400px",
				"style":"margin: 5px;  vertical-align: middle;",
				"src":JSONObject.fileName,
				"title":JSONObject.fileName.slice(JSONObject.fileName.lastIndexOf("/")+1)
			});
		
			$("#thumbnails").prepend(img);
		}else{
			alert(JSONObject.message)
		} ;
  
    });
});
</script>
<?php include '../inc/footer.php';?>