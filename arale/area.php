<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';?>
	
<link media="all" href="../css/calendar.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery.location.js"></script>
	
<style type="text/css">
.content {
    margin: 0 auto;
    width: 990px;
}
.ui-grid-18{
    height: 500px;
	background: #eed;
}

.ui-grid-6{
    height: 500px;
	background: #eee;
}
</style>
	
<div class="ui-grid-18" >
	<div style="height:50px">
	
	</div>
	 <div class="ui-form-item ui-form-item-error ui-form-item-focus">
			<div>
				<span id="container" ></span>
			</div>
		</div>
		<span style="margin:170px">
			<button id="showArea" class="ui-button ui-button-lgreen">显示</button>
			<button id="showArea1" class="ui-button ui-button-lgreen">成都</button>
			<button id="showArea2" class="ui-button ui-button-lgreen">杭州</button>
		</span>
		<div id="resultDiv" style="margin:10px">
			 <div class="ui-form-item ui-form-item-error ui-form-item-focus">
				<label for="" class="ui-label">省份：</label>
				<input id ="provTxt" class="ui-input" type="text"> <input id ="provVal" class="ui-input" type="text"> 
				<span class="ui-form-other"><a href="#">选择的省份</a></span>
				<p style="display:none" class="ui-form-explain ui-tiptext ui-tiptext-error">
					<i class="ui-tiptext-icon iconfont" title="出错">&#xF045;</i>
					ui-form-item-focus 的效果。
				</p>
			</div>	
			<div class="ui-form-item ui-form-item-error ui-form-item-focus">
				<label for="" class="ui-label">市：</label>
				<input id ="cityTxt" class="ui-input" type="text"> 
				<input id ="cityVal" class="ui-input" type="text"> 
				<span class="ui-form-other"><a href="#">选择的城市</a></span>
				<p style="display:none" class="ui-form-explain ui-tiptext ui-tiptext-error">
					<i class="ui-tiptext-icon iconfont" title="出错">&#xF045;</i>
					ui-form-item-focus 的效果。
				</p>
			</div>
			<div class="ui-form-item ui-form-item-error ui-form-item-focus">
				<label for="" class="ui-label">区：</label>
				<input id ="distTxt" class="ui-input" type="text"> 
				<input id ="distVal" class="ui-input" type="text"> 
				<span class="ui-form-other"><a href="#">选择的区县</a></span>
				<p style="display:none" class="ui-form-explain ui-tiptext ui-tiptext-error">
					<i class="ui-tiptext-icon iconfont" title="出错">&#xF045;</i>
					ui-form-item-focus 的效果。
				</p>
			</div>
			
		</div>
	</div>
<div id="thumbnails" class="ui-grid-6">

</div>
<script>
	document.title += "--地区插件"; 

$(function(){
	var areaObj = $("#container").location(
		{
			xmlpatch:"../js/Location.xml",
			xdis:false,
			firstop: false
		}
	);

	$("#container select:first").find("option[value='23']").attr("selected", true);
	$("#container select:first").change();
	
	$("#container select:eq(1)").find("option[value='244']").attr("selected", true);
	$("#container select:eq(1)").change();
		
	$("#container select:eq(2)").find("option[value='2112']").attr("selected", true);
	
	$("#showArea").click(function(){
		$("#provTxt").val($("#container").GetProvinceTxt());
		$("#cityTxt").val($("#container").GetCityTxt());
		$("#distTxt").val($("#container").GetDistrictTxt());
		
		$("#provVal").val($("#container").GetProvinceVal());
		$("#cityVal").val($("#container").GetCityVal());
		$("#distVal").val($("#container").GetDistrictVal());
	});
	$("#showArea1").click(function(){
		//areaObj.SetProvinceIndex('22');//四川23
		$("#container select:first").find("option[value='23']").attr("selected", true);  //和上面的方法，二选一
		$("#container select:first").change();
	
		$("#container select:eq(1)").find("option[value='235']").attr("selected", true);
		$("#container select:eq(1)").change();
			
		$("#container select:eq(2)").find("option[value='2043']").attr("selected", true);
		
	});
	
	$("#showArea2").click(function(){
		$("#container select:first").find("option[value='11']").attr("selected", true);
		$("#container select:first").change();
	
		$("#container select:eq(1)").find("option[value='87']").attr("selected", true);
		$("#container select:eq(1)").change();
			
		$("#container select:eq(2)").find("option[value='848']").attr("selected", true);
	});
	
});

</script>
<?php include '../inc/footer.php';?>