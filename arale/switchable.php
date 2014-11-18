<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';?>
	
<link media="all" href="../css/calendar.css" rel="stylesheet">

<style type="text/css">
.content {
    margin: 0 auto 0 220px;
	padding:10px 0 0 15px;
    width: 990px;
}

/**************  slide-demo-1  *********************/
#slide-demo-1 {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}
#slide-demo-1 .ui-switchable-content {
    margin: 0;
    padding: 0;
    list-style: none;
}
#slide-demo-1 .ui-switchable-content .ui-switchable-panel {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}
#slide-demo-1 .ui-switchable-content .ui-switchable-panel img {
    margin-left: -660px;
}
#slide-demo-1 .ui-switchable-nav {
    position: absolute;
    bottom: 10px;
    right: 10px;
    margin: 0;
    padding: 0;
    z-index: 99;
    font-size: 12px;
}
#slide-demo-1 .ui-switchable-nav .ui-switchable-trigger {
    float: left;
    width: 15px;
    height: 15px;
    line-height: 17px;
    margin-left: 5px;
    background-color: #FFF;
    opacity: .5;
    filter: alpha(opacity=50);
    text-align: center;
    color: black;
    cursor: pointer;
    list-style: none;
}
#slide-demo-1 .ui-switchable-nav .ui-switchable-active {
    color: #FFF;
    background-color: #e96c3e;
    opacity: 1;
    filter: alpha(opacity=100);
}

/*************************  tab-demo-1 *****************************/
#tab-demo-1 {
        font: 14px/1.5 'Xin Gothic', 'PT Sans', 'Hiragino Sans GB', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        position: relative;
        width: 750px;
        padding-top: 29px;
    }

    #tab-demo-1 .ui-switchable-nav {
        position: absolute;
        top: 0;
        left: 20px;
        margin: 0;
        padding: 0;
        z-index: 99;
        list-style: none;
    }

    #tab-demo-1 .ui-switchable-nav li {
        float: left;
        width: 130px;
        height: 27px;
        line-height: 21px;
        text-align: center;
        background: url(assets/tabs-sprite.gif) no-repeat 0 6px;
        margin-right: 3px;
        padding-top: 8px;
        cursor: pointer;
        list-style: none;
    }

    #tab-demo-1 .ui-switchable-nav .ui-switchable-active {
        background-position: 0 -40px;
        cursor: default;
    }

    #tab-demo-1 .ui-switchable-content {
        position: relative;
        height: 150px;
        padding: 20px;
        border: 1px solid #AEC7E5;
    }
	
/******************* Alipay 轮播  原点形式  ***************************/	
#slide-demo-2 {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}
#slide-demo-2 .ui-switchable-content {
    margin: 0;
    padding: 0;
    list-style: none;
}
#slide-demo-2 .ui-switchable-content .ui-switchable-panel {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}
#slide-demo-2 .ui-switchable-content .ui-switchable-panel img {
    margin-left: -660px;
}
#slide-demo-2 .ui-switchable-nav {
    position: absolute;
    bottom: 10px;
    left: 0;
    width: 100%;
    margin: 0;
    padding: 0;
    z-index: 99;
    text-align: center;
}
#slide-demo-2 .ui-switchable-nav .ui-switchable-trigger {
    display: inline-block;
    *display: inline;
    *zoom: 1;
    margin-left: 5px;
    font-size: 12px;
    line-height: 1.5;
    opacity: .5;
    filter: alpha(opacity=50);
    color: white;
    cursor: pointer;
    list-style: none;
}
#slide-demo-2 .ui-switchable-nav .ui-switchable-active {
    opacity: 1;
    filter: alpha(opacity=100);
}


/******************** Alipay 轮播: 文字条 ****************************/
#slide-demo-3 {
    position: relative;
    width: 600px;
    height: 30px;
    padding: 0 60px 0 20px;
    line-height: 30px;
    overflow: hidden;
    background: #eaeaea;
    font-size: 12px;
}
#slide-demo-3 .wrapper, #slide-demo-3 .wrapper .ui-switchable-content .ui-switchable-panel {
    width: 600px;
    height: 30px;
    line-height: 30px;
    overflow: hidden;
}
#slide-demo-3 .wrapper .ui-switchable-content {
    margin: 0;
    padding: 0;
    list-style: none;
}
#slide-demo-3 .nav {
    position: absolute;
    top: 0;
    right: 10px;
    margin: 0;
}
#slide-demo-3 .nav a {
    display: inline-block;
    *display: inline;
    *zoom: 1;
    width: 12px;
    height: 12px;
    line-height: 10px;
    font-size: 16px;
    text-align: center;
    border: 1px solid #cdcdcd;
    color: #999;
    background: white;
}
#slide-demo-3 .nav a:hover {
    color: #f50;
}
#slide-demo-3 .nav #next {
    border-left: none;
}

/******************* Accordion - 手风琴 ***************************/
#accordion-demo-2 {
    width: 300px;
    border: 1px solid #ccc;
}

#accordion-demo-2 .ui-switchable-trigger {
    height: 30px;
    line-height: 34px;
    padding: 0 10px;
    cursor: pointer;
    border-bottom: 1px solid #ddd;
    background: #f3f3f3;
    overflow: hidden;
}

#accordion-demo-2 .ui-switchable-trigger h3 {
    margin: 0;
    padding-left: 20px;
    background: transparent url(assets/accordion-sprite.png) no-repeat 0 10px;
}

#accordion-demo-2 .ui-switchable-panel {
    height: 150px;
    padding: 3px 10px;
    border-bottom: 1px solid #ddd;
}

#accordion-demo-2 .ui-switchable-active h3 {
    background-position: 0 -14px;
}

#accordion-demo-2 .last-trigger {
    border-bottom-width: 0
}

#accordion-demo-2 .ui-switchable-active {
    border-bottom-width: 1px
}

#accordion-demo-2 .last-panel {
    border-bottom: none
}

</style>
<link media="all" href="../css/side-area.css" rel="stylesheet">
<div class="side-area" style="position: fixed;left:0px; top: 80px;">
    <ul>
        <li class=""><a href="#slide-demo-1">slide<i class="iconfont" title="单箭头右">图片轮播</i></a></li>
		<li><a href="#tab-demo-1">tabs<i class="iconfont" title="单箭头右">表格切换</i></a></li>
		<li><a href="#slide-demo-2">slide<i class="iconfont" title="单箭头右">原点轮播</i></a></li>
		<li><a href="#slide-demo-3">message<i class="iconfont" title="单箭头右">文字条</i></a></li>
		<li class=""><a href="#accordion-demo-1">accordion<i class="iconfont" title="单箭头右">手风琴</i></a></li>
		<li><a href="#modules-nav">nav<i class="iconfont" title="单箭头右">导航</i></a></li>
		<li class="side-highlight"><a href="#modules-paging">paging<i class="iconfont" title="单箭头右">分页</i></a></li>
		<li><a href="#modules-poptip">poptip<i class="iconfont" title="单箭头右">气泡</i></a></li>
	</ul>
</div>

    <div class="ui-grid-21" >
		<div id="slide-demo-1" class="slide-demo">
			<ul class="ui-switchable-content" data-switchable-role="content">
				<li class="ui-switchable-panel"><a href="#"><img src="./image/slide_1.jpg" /></a></li>
				<li class="hidden ui-switchable-panel"><a href="#"><img src="./image/slide_2.jpg" /></a></li>
				<li class="hidden ui-switchable-panel"><a href="#"><img src="./image/slide_3.jpg" /></a></li>
				<li class="hidden ui-switchable-panel"><a href="#"><img src="./image/slide_4.jpg" /></a></li>
			</ul>
		</div>
		
		</br>
		<div id="tab-demo-1" class="tab-demo">
			<ul class="ui-switchable-nav">
				<li>荷兰2-1墨西哥</li>
				<li>法国2-0尼日利亚</li>
				<li>德国2-1阿尔及利亚</li>
				<li>阿根廷VS瑞士</li>
			</ul>
			<div class="ui-switchable-content">
				<div class="hidden">
					搜狐体育讯
					<p>					 北京时间6月30日凌晨0时，2014年巴西世界杯展开第三场16强战争夺。在福塔莱萨的卡斯特劳体育场，荷兰队在先丢一球的情况下最后阶段连入两球以2-1逆转淘汰墨西哥队惊险杀入1/4决赛，墨西哥队则连续六届世界杯均止步16强阶段。第48分钟，多斯桑托斯远射破门助墨西哥队领先；第88分钟，斯内德接替补出场的亨特拉尔摆渡右脚劲射扳平比分。补时阶段，罗本制造点球，亨特拉尔操刀命中打入逆转制胜球。
					</p>
				</div>
				<div class="hidden">北京时间7月1日凌晨0点，2014年巴西世界杯1/8决赛一场焦点之战在巴西利亚的国家体育场打响，法国队与尼日利亚队为了一个8强名额展开直接较量。上半场比赛双方都没有完成破门，比分暂时0-0平。下半场波巴头球破门得分，雅博打进乌龙球，最终法国队2-0战胜尼日利亚，时隔8年后再次晋级8强，1/4决赛的对手将来自于德国队和阿尔及利亚队之间的胜者。</div>
				<div class="hidden">北京时间7月1日凌晨4时，2014年巴西世界杯1/8决赛的较量，在阿雷格里港滨河（贝拉里奥）球场，上届季军德国队90分钟内0-0与首次杀入16强的阿尔及利亚战平。
</br>				加时赛，德国队2-1力克对手，昂首挺进八强。比赛中，双方门将都有出色表现：诺伊尔多次冲出禁区完成解围，姆博希则高接低挡接穆勒、小猪、格策等人的射门统统拒之门外。加时赛，许尔勒和厄齐尔各入一球，贾布则为球队扳回一城。
				</div>
				<div class="hidden">
				<p>北京时间7月2日凌晨0时，2014年巴西世界杯第七场1/8决赛将在圣保罗的伊塔盖拉球场开打，夺冠大热门阿根廷迎战欧洲劲旅瑞士。
				</p>
			　　<p>    
	数据解析：阿根廷对阵瑞士不败</p>
				<p>
　　历史上阿根廷与瑞士共有过6次交锋，探戈军团4胜2平保持不败。双方唯一一次在世界杯上对垒是在1966年，当时阿根廷在小组赛中2-0完胜瑞士。双方最近一次交锋是在2012年，阿根廷在伯尔尼的友谊赛中3-1轻取瑞士，梅西在比赛中上演帽子戏法，“瑞士梅西”沙奇里也打入一球。
				</p></div>
			</div>	
		</div>
		
		</br>
		<div id="slide-demo-2" class="slide-demo">
			<ul data-switchable-role="content" class="ui-switchable-content">
				<li class="hidden ui-switchable-panel"><a href="#"><img src="./image/slide_1.jpg" /></a></li>
				<li class="ui-switchable-panel"><a href="#"><img src="./image/slide_2.jpg" /></a></li>
				<li class="hidden ui-switchable-panel"><a href="#"><img src="./image/slide_3.jpg" /></a></li>
			</ul>
			<ul data-switchable-role="nav" class="ui-switchable-nav">
				<li class="ui-switchable-trigger">●</li>
				<li class="ui-switchable-trigger ui-switchable-active">●</li>
				<li class="ui-switchable-trigger">●</li>
			</ul>
		</div>
		
		
		</br>
		
		<div id="slide-demo-3" class="slide-demo">
			<div class="wrapper">
				<ul data-switchable-role="content" class="ui-switchable-content">
					<li class="ui-switchable-panel"><strong>公告1: </strong>Arale 立足于支付宝的前端需求和国内前端社区，基于 Sea.js 和 CMD 规范，致力发展小而美的前端模块架构，建立了一套从编码测试到部署的开发体系， 是一个开放、简单、易用的前端解决方案。</li>
					<li class="hidden ui-switchable-panel"><strong>公告2: </strong>Arale 立足于支付宝的前端需求和国内前端社区，基于 Sea.js 和 CMD 规范，致力发展小而美的前端模块架构，建立了一套从编码测试到部署的开发体系， 是一个开放、简单、易用的前端解决方案。</li>
					<li class="hidden ui-switchable-panel"><strong>公告3: </strong>Arale 立足于支付宝的前端需求和国内前端社区，基于 Sea.js 和 CMD 规范，致力发展小而美的前端模块架构，建立了一套从编码测试到部署的开发体系， 是一个开放、简单、易用的前端解决方案。</li>
				</ul>
			</div>
			<p class="nav">
				<a id="prev" href="#">‹</a>
				<a id="next" href="#">›</a>
			</p>
		</div>	
		
		</br>
		<div id="accordion-demo-2" class="accordion-demo">
			<div class="ui-switchable-trigger" data-switchable-role="trigger"><h3>标题A</h3></div>
			<div class="ui-switchable-panel hidden" data-switchable-role="panel">
				1、支持鼠标滑过和点击触点两种方式<br/>
				2、支持同时展开多个面板
			</div>
			<div class="ui-switchable-trigger" data-switchable-role="trigger"><h3>标题B</h3></div>
			<div class="ui-switchable-panel hidden" data-switchable-role="panel">内容B<br/>内容B<br/>内容B</div>
			<div class="ui-switchable-trigger" data-switchable-role="trigger"><h3>标题C</h3></div>
			<div class="ui-switchable-panel hidden" data-switchable-role="panel">内容C<br/>内容C<br/>内容C<br/>内容C<br/>内容C</div>
			<div class="ui-switchable-trigger last-trigger" data-switchable-role="trigger"><h3>标题D</h3></div>
			<div class="ui-switchable-panel last-panel hidden" data-switchable-role="panel">内容D<br/>内容D<br/>内容D</div>
		</div>
		
		
	</div>
	
	


<script type="text/javascript">
	document.title += "--Switchable"; 
seajs.use(['slide'], function(Slide) {
    slide = new Slide({
        element: '#slide-demo-1',
        effect: 'scrolly',
        interval: 4000
    });
});

  seajs.use(['arale/switchable/1.0.2/tabs'], function(Tabs) {
        tabs = new Tabs({
            element: '#tab-demo-1',
            triggers: '#tab-demo-1 .ui-switchable-nav li',
            panels: '#tab-demo-1 .ui-switchable-content div',
            activeIndex: 0,
            effect: 'fade',
			duration :200
        });
    });
seajs.use(['arale/switchable/1.0.2/slide'], function(Slide) {
    var slide = new Slide({
        element: '#slide-demo-2',
        effect: 'fade',
        activeIndex: 1
    }).render();
});

seajs.use(['arale/switchable/1.0.2/slide', '$'], function(Slide, $) {
    var slide = new Slide({
        element: '#slide-demo-3',
        effect: 'scrollx',
        hasTriggers: false
    }).render();

    // 自定义 prev/next
    $("#slide-demo-3 #prev").click(function(e) {
        e.preventDefault();

        slide.prev();
    });

    $("#slide-demo-3 #next").click(function(e) {
        e.preventDefault();

        slide.next();
    });
});
	
seajs.use(['arale/switchable/1.0.1/accordion', '$'], function(Accordion, $) {
    accordion = new Accordion({
        element: '#accordion-demo-2',
        multiple: true,
        activeIndex: -99
    }).render();
});

	
 $(function(){
	$(".side-area ul li").click(function(){
		$(".side-area ul li").removeClass("side-highlight");
		$(this).addClass("side-highlight");
	})
 });
</script>
<?php include '../inc/footer.php';?>