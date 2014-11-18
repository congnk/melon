<?php include 'inc/header.php';?>

<?php include 'inc/nav.php';?>
	
<style type="text/css">
.ui-step{
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
	margin:3px 0;
}
ul {
	list-style-type:square
}

.content {
    margin: 0 auto;
    width: 990px;
}
.ui-grid-15{
    height: 500px;
	background: #eed;
}
.ui-grid-9{
	background: #eee;
    height: 500px;
}

.content a:visited { 
	color: #08c; 
} 
.file_div {
	padding : 25px ;
}
.list_div {
	padding:0 20px 20px 20px;
	overflow:auto;
	height: 425px;
}
#qr_code {
	padding:0 0 0 0px;
}
.qr_area_div {
	margin:0 145px;
	font-family: "宋体";
	font-size: 36px;
	color: #CCCCCC;
	background-color: #FFFFCC;
	height:297px;
	vertical-align:middle;
	line-height:320px;
}

.ui-poptip {
	z-index:1;
}

</style>



<div class="ui-grid-15 cell" >
	<div class="file_div" >
		<p>
			<button id="uploader_1" class="ui-button ui-button-lgreen">点我上传</button>
			<span id="upload-2-text"></span>
		</p>
	
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
	
	<div id="qr_code" >
		<div id="qrcodeDefault" align="center" class="qr_area_div " > 二维码展示区</div>
	</div>
	
</div>
 <div id="thumbnails" class="ui-grid-9">
	<div class="ui-poptip ui-poptip-blue">
		<div class="ui-poptip-shadow">
		<div class="ui-poptip-container">        
			<div class="ui-poptip-arrow ui-poptip-arrow-7">
				<em></em>
				<span></span>
			</div>
			<div class="ui-poptip-content">
			 1.点击文件名可生成二维码。</br>2.查看文件，请右键文件名选择”新标签中打开”。
			</div>
		</div>
		</div>
	</div>
	
	<div  class="list_div">
	<ul id="file_list" class="ui-list">
	<?php
		// Read the files from the saved images folder
		$dir = new DirectoryIterator("fileServer/files");
		foreach ($dir as $fileinfo) {
			if (!$fileinfo->isDot() && $fileinfo->isFile()) {
				$iname = iconv("gb2312","UTF-8", $fileinfo->getFilename()) ;
				echo '<li class="ui-list-item" > <a href="' . $fileinfo->getPath() ."/" 
					. $iname . '" title=' . $iname . ' >'  . $iname . '</a> </li>' . "\n";
			}
		}
	?>
	</ul>
	</div>
</div>

<div id="model_tip" class="ui-poptip" style="display:none">
			 <a href="javascript:;" class="ui-poptip-close">×</a>
</div>

<script>
document.title = "文件中转服务器"; 
seajs.use(['$', 'upload'], function($, Uploader) {
 new Uploader({
      trigger: '#uploader_1',
      action: 'fileServer/upload.php',
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
		this.submit();
	}).success(function(data) {
		var JSONObject = jQuery.parseJSON( data );
		if( JSONObject.result == "true"){
			var li = document.createElement("li");
			var a = document.createElement("a");
			$(a).attr({
				"href":"fileServer/" + JSONObject.fileName,
				"title":JSONObject.fileName.slice(JSONObject.fileName.lastIndexOf("/")+1),
			});
			$(a).html(  $(a).attr("title") );
			$(li).prepend(a);
			$("#file_list").prepend(li);
			genQrCode( encodeURI( pageHref + "fileServer/" + JSONObject.fileName ))
		}else{
			alert(JSONObject.message)
		} ;
  
    });
});
var pageHref =  window.location.href.slice( 0,window.location.href.lastIndexOf("/") + 1 ) ; 

function genQrCode( str ){
		seajs.use(['$','qrcode'], function($, qrcode){
			var qrnode = new qrcode({
				render: "table",
				correctLevel: 1,
				text: str,
				width: 320,
				height: 320
			});
			$('#qrcodeDefault').empty();
			$('#qrcodeDefault').append(qrnode);
		});
	}

function genDelSpan( adom){
	$("#delete_tip_span").remove();
	
	var span = document.createElement("span");
	var txt = $(adom).attr("href") ;
	txt = txt.slice(txt.indexOf("/") + 1) ; //去掉”fileServer" 前缀
	$(span).attr("id","delete_tip_span");
	$(span).css({"padding-left":"20px","position":"absolute"}) ;
	
	$tipDiv = $("#model_tip").clone();
	$tipDiv.attr("id","");
	$($tipDiv).find("a").attr("href",txt).click(function(){
		var file_name = $(this).attr("href");
		$.post('fileServer/delete.php',
			{
				filename:file_name
			},
			function(data){					
				var JSONObject = jQuery.parseJSON( data); 
			//	console.log(JSONObject);
				if( JSONObject.result == "true" ){
					$(adom).parent() .remove();
				}else{
					alert(JSONObject.message);
					//console.log(JSONObject.filename);
				}
			}
		);
		
		return false ;
	});
	$tipDiv.css({"display":"block"});
	$(span).append($tipDiv);
	
	return span ;
}
	
$(function(){
	$("#file_list").on("click",">li>a",function(e){	
		genQrCode(this.href);
		e.preventDefault();
		return false ;
	});
	$("#file_list > li > a").live("mouseover",function(){
		var current_li = $(this).parent() ;
		var span = genDelSpan( this ) ;
		
		current_li.append(span);
	});
	$("#file_list").mouseleave(function(){
		$("#delete_tip_span").remove();
	})
});


</script>
<?php include 'inc/footer.php';?>
