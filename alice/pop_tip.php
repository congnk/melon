<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';	?>
<div style="width:500px;position:absolute;">
	<div class="btn_div">
		<button id="content" class="ui-button ui-button-lorange">橙色</button>
		<span >点击按钮，弹出提示</span>
		<div id="first_pop" class="ui-poptip" style="display:none">
			<div class="ui-poptip-shadow">
				<div class="ui-poptip-container">
					<div class="ui-poptip-arrow ui-poptip-arrow-11">
						<em></em>
						<span></span>
					</div>
					<a href="javascript:;" class="ui-poptip-close">×</a>
					<div class="ui-poptip-content">
						<div>我是内容。</div>
						<div>我是内容我是内容我是内容---------------------------------------。</div>
						<div>
							<a href="https://app.alipay.com/xxxx" target="_blank">现在使用</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="btn_div">
		<button class="ui-button ui-button-ldisable">灰色</button>
		<div class="ui-poptip ui-poptip-white" style="display:none">
			<div class="ui-poptip-shadow">
			<div class="ui-poptip-container">
				<div class="ui-poptip-arrow ui-poptip-arrow-3">
					<em></em>
					<span></span>
				</div>
				<div class="ui-poptip-content">		近日，有新闻报道说国家广电总局正在制定“三定方案”，整治泛滥的抗日连续剧。以后所有的抗日剧都需要提前审查报备，而带有魔幻传奇色彩的抗日剧则将一律禁止。本人从不观看此类重口味电视剧，但得知抗日剧的事件已经大得“惊动了广电局”，于是特地上网搜索了一下相关视频，想弄清这些抗日剧到底在拍些什么<br>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="btn_div">
		<button id="second_btn" class="ui-button ui-button-lgreen">绿色</button>
		<div id ="second_pop" class="ui-poptip ui-poptip-blue" style="display:none">
		<div class="ui-poptip-shadow">
		<div class="ui-poptip-container">
			<div class="ui-poptip-arrow ui-poptip-arrow-3">
				<em></em>
				<span></span>
			</div>
			<div class="ui-poptip-content">		虽然他没有对她说过任何在别人面前不能说的话，但是他感觉得她越来越依恋他了，他越这样感觉得，他就越欢喜，而对她也就越是情意缠绵了。他不晓得他对基蒂的这种行为有一个特定的名称，那就是向少女调情而又无意和她结婚，这种调情是像他那样风度翩翩的公子所共有的恶行之一。他以为他是第一个发现这种快乐的，他正在尽情享受着他的发现.<br>
			我是内容我是内容<br>
			</div>
		</div>
		</div>
	</div>
	</div>
	
</div>
<script >
	$(function(){
		var curr_zindex = 0 ;
		$(".btn_div .ui-button").click(function(){
			var pop_div = $(this).siblings(".ui-poptip")
			pop_div.show();
			pop_div.css("top",$(this).position().top + $(this).height ) ;
			pop_div.css("z-index",++curr_zindex) ;
		});
		$(".ui-poptip").click(function(){
			$(this).hide();
		});
		$(".ui-poptip-close").click(function(){
			$("#first_pop").hide();
		});
	});

	document.title += "-- 小提示层"; 
	$(function(){
		$("#alice_nav li:eq(3)").addClass("ui-nav-subitem-current");
	});
</script>
<style>
	.btn_div {
		margin:3px ; 	
	}
	
	.ui-poptip {
		position:absolute;
		left:15px ;
	}
	
</style>
<?php include '../inc/footer.php';?>