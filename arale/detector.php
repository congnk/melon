<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';?>
	
<link media="all" href="../css/calendar.css" rel="stylesheet">

<style type="text/css">
.side-area {
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 220px;
    background: #fff;
    border-bottom: 1px solid #ddd;
}

.side-area ul {
    padding: 0;
    margin: 0;
    list-style: none;
    line-height: normal;
}

.side-area ul li ul {
    display: none;
}

.side-area .side-highlight a {
    background: #FBFFD7;
    text-shadow: none;
    font-weight: bold;
    transition: background-color 0.8s ease-out;
}

.side-area .side-highlight a:hover {
    background: #FBFFD7;
}

.side-loading {
    height: 100px;
    text-align: center;
    line-height: 100px;
    border: 1px solid #ddd;
    border-bottom: none;
}

.side-area a {
    font-size: 14px;
    display: block;
    padding: 8px 15px;
    border: 1px solid #ddd;
    border-bottom: none;
    position: relative;
    text-shadow: 0 1px 2px #eee;
    color: #7CAE23;
}

.side-area a .iconfont {
    color: #aaa;
    position: absolute;
    right: 12px;
    top: 11px;
    font-size: 12px;
    line-height: 14px;
}

.side-area a:hover {
    background: #f8f8f8;
    text-decoration: none;
}

.side-area a:hover .iconfont {
    color: #aaa;
}
</style>
<div class="side-area" style="position: fixed; top: 20px;">
                    <ul>
                        
                    <li class=""><a href="#modules-box">box<i class="iconfont" title="单箭头右">区块</i></a></li><li class=""><a href="#modules-button">button<i class="iconfont" title="单箭头右">按钮</i></a></li><li><a href="#modules-button-dropdown">button-dropdown<i class="iconfont" title="单箭头右">按钮菜单</i></a></li><li><a href="#modules-form">form<i class="iconfont" title="单箭头右">表单</i></a></li><li class=""><a href="#modules-list">list<i class="iconfont" title="单箭头右">列表</i></a></li><li class=""><a href="#modules-nav">nav<i class="iconfont" title="单箭头右">导航</i></a></li><li class="side-highlight"><a href="#modules-paging">paging<i class="iconfont" title="单箭头右">分页</i></a></li><li><a href="#modules-poptip">poptip<i class="iconfont" title="单箭头右">气泡</i></a></li><li><a href="#modules-tab">tab<i class="iconfont" title="单箭头右">标签页</i></a></li><li><a href="#modules-table">table<i class="iconfont" title="单箭头右">表格</i></a></li><li><a href="#modules-tipbox">tipbox<i class="iconfont" title="单箭头右">提示框</i></a></li><li><a href="#modules-tiptext">tiptext<i class="iconfont" title="单箭头右">提示文本</i></a></li><li><a href="#modules-select">select<i class="iconfont" title="单箭头右">下拉框</i></a></li><li><a href="#modules-loading">loading<i class="iconfont" title="单箭头右">加载中</i></a></li><li><a href="#modules-step">step<i class="iconfont" title="单箭头右">步骤</i></a></li></ul>
                </div>
    <div id="content-wrapper" style="padding-left:40px">
        <div id="content">
		<article class="hentry">
		  <h1 class="entry-title">浏览器版本探测器</h1>
		  <div class="entry-content">
			<p>您正在使用：</p>
		<pre id="detector"></pre>

		<ul>
		<li>如果上面识别的信息不正确，<a id="issues"
		href="https://github.com/aralejs/detector/issues/new"
		target="_blank"><strong>请给我们提 Issues 反馈</strong></a>。</li>
		<li>如果没有 Github 账户，请向我们 <a id="email" href="mailto:hotoo.cn@gmail.com"
		target="_blank"><strong>发送 Email</strong></a>。</li>
		<li>如果点击链接无法发送 Email，请拷贝这个页面的内容手工发送 Email 给 <code>hotoo.cn@gmail.com</code>。</li>
		</ul>
		<pre id="ua"></pre>
		</div>
	</div>
	

<script type="text/javascript">
	document.title += "--Detector"; 
  function isObject(obj){
    return Object.prototype.toString.call(obj) === "[object Object]";
  }
  function expandObject(obj){
    if(!isObject(obj)){return obj;}
    var s = '{';
    for(var k in obj){
      if(obj.hasOwnProperty(k)){
        s += k + ':' + typeof obj[k] + ',';
      }
    }
    s += '}';
    return s;
  }

  seajs.use("detector", function(detector){

    var OS_ALIAS = {
      // 4.0
      "windows/4":  "Windows 95",
      "windows/4.1": "Windows 98",
      "windows/4.9": "Windows ME",
      // 5.0
      "windows/5":  "Windows 2000",
      "windows/5.1":  "Windows XP",
      "windows/5.2":  "Windows Server 2003",
      // 6.0
      "windows/6":  "Windows Vista",
      "windows/6.1":  "Windows 7",
      "windows/6.2":  "Windows 8",
      "windows/6.3":  "Windows 8.1",
      // 10.0
      "macosx/10": "Mac OS X Cheetah",
      "macosx/10.1": "Mac OS X Puma",
      "macosx/10.2": "Mac OS X Jaguar",
      "macosx/10.3": "Mac OS X Panther",
      "macosx/10.4": "Mac OS X Tiger",
      "macosx/10.5": "Mac OS X Leopard",
      "macosx/10.6": "Mac OS X Snow Leopard",
      "macosx/10.7": "Mac OS X Lion",
      "macosx/10.8": "Mac OS X Mountain Lion",
      "macosx/10.9": "Mac OS X Mavericks",
	  
	  "android/2.2" : "Android 2.2 Froyo ",
	  "android/2.3" : "Android 2.3 Gingerbread ",
	  "android/4.0" : "Android 4.0 Ice Cream Sandwich",
	  "android/4.1" : "Android 4.1 JellyBean",
	  "android/4.2" : "Android 4.2 JellyBean",
	  "android/4.3" : "Android 4.3 JellyBean",
	  "android/4.4" : "Android 4.3 KitKat"
    };
	
	 var BROSWER_ALIAS = {
		"ie":" Microsoft Internet Explorer ",
		"chrome":" Google Chrome ",
		"firefox":" Mozilla Firefox ",
		"safari":" Apple Safari ",
		"opera":" Opera ",
		"360":" 包括奇虎 360 安全浏览器和 360 极速浏览器 ",
		"mx":" 傲游浏览器(Maxthon) ",
		"sg":" 搜狗浏览器(Sogou) ",
		"tw":" 世界之窗浏览器(TheWorld) ",
		"green":" GreenBrowser ",
		"qq":" QQ 浏览器 ",
		"tt":" TencentTraveler ",
		"lb":" 猎豹浏览器 ",
		"tao":" 淘宝浏览器 ",
		"fs":" 枫树浏览器 ",
		"sy":" 闪游浏览器 ",
		"uc":" UC 浏览器 ",
		"mi":" 小米浏览器 ",
		"baidu":" 百度浏览器 ",
		"nokia":" 诺基亚浏览器 ",
		"webview":" iOS 系统的提供的 WebView ",
		"yandex":" Yandex YaBrowser ",
		"ali-ap":" 支付宝手机客户端 ",
		"ali-ap-pd":" 支付宝平板客户端 ",
		"ali-am":" 支付宝商户客户端 ",
		"ali-tb":" 淘宝手机客户端 ",
		"ali-tb-pd":" 淘宝平板客户端 ",
		"ali-tm":" 天猫手机客户端 ",
		"ali-tm-pd":" 天猫平板客户端 "
	 };
	 
	var DEVICE_ALIAS = {
		"pc":" Windows PC ",
		"mac":" Macintosh PC ",
		"iphone":" iPhone ",
		"ipad":" iPad ",
		"ipod":" iPod ",
		"android":" Android ",
		"blackberry":" 黑莓(Blackberry)手机 ",
		"wp":" Windows Phone ",
		"mi":" 小米 ",
		"meizu":" 魅族 ",
		"nexus":" Nexus ",
		"nokia":" Nokia ",
		"samsung":" 三星手机 ",
		"aliyun":" 阿里云手机 ",
		"huawei":" 华为手机 ",
		"lenovo":" 联想手机 ",
		"zte":" 中兴手机 ",
		"vivo":" 步步高手机 ",
		"htc":" HTC ",
		"oppo":" OPPO 手机 ",
		"konka":" 康佳手机 ",
		"sonyericsson":" 索尼爱立信手机 ",
		"coolpad":" 酷派手机 ",
		"lg":" LG 手机 "
	 };

    var detectedInfo = [];
	var deviceAlias = DEVICE_ALIAS[detector.device.name] || "N/A";
    detectedInfo.push("* 硬件设备："+deviceAlias  +  detector.device.fullVersion );
	detectedInfo.push("* 硬件设备："+detector.device[detector.device.name] );
	
    var osAlias = OS_ALIAS[detector.os.name+"/"+detector.os.version] || "N/A";
    detectedInfo.push("* 操作系统："+osAlias+ " ("+detector.os.name+" "+detector.os.fullVersion +")");
	
	var browserAlias = BROSWER_ALIAS[detector.browser.name] || "N/A" ;
    detectedInfo.push("* 浏览器："+browserAlias + detector.browser.fullVersion + " (" 
		+ detector.browser.name + " " +detector.browser.fullVersion+
        (detector.browser.compatible ? "(" + String(detector.browser.fullMode) + " 兼容模式)" : "")
		+")");
    detectedInfo.push("* 渲染引擎：" + detector.engine.name + " " + detector.engine.fullVersion +
        (detector.engine.compatible ? "(" + String(detector.engine.fullMode) + " 兼容模式)" : ""));

    document.getElementById("detector").innerHTML = detectedInfo.join("<br />");
	var ext;
    if(!window.external){
      ext = "undefined";
    }if(Object.prototype.toString.call(window.external)==="[object Object]"){
      ext = [];
      try{
        for(var k in window.external){
          ext.push(k+": "+typeof(window.external[k])+
            (window.external.hasOwnProperty(k)?"":"[prototype]"));
        }
      }catch(ex){window.console && console.log("1. "+k+":"+ex.message);}
      ext = "{"+ext.join(", ")+"}";
    }else{
      ext = window.external +"["+typeof(window.external)+"]";
    }
    var info = {
      ua : navigator.userAgent,
      vendor : navigator.vendor,
      vendorSub : navigator.vendorSub,
      platform : navigator.platform,
      external : ext,
      appCodeName : navigator.appCodeName,
      appName : navigator.appName,
      appVersion : navigator.appVersion,
      product : navigator.product,
      productSub : navigator.productSub,
      screenWidth : screen.width,
      screenHeight : screen.height,
      colorDepth : screen.colorDepth,
      documentMode: document.documentMode,
      compatMode: document.compatMode
    };

    var a = [
      "| 字段 | 值 |",
      "|------|----|"
    ];
    for(var k in info){
      if(!info.hasOwnProperty(k)){continue;}
      try{ // IE10 不支持此属性或方法。。。
        a.push("| "+k+" | "+String(info[k])+" |");
      }catch(ex){window.console && console.log("2. "+k+":"+ex.message);}
    }

    document.getElementById("ua").innerHTML = a.join("<br />");
    document.getElementById("email").setAttribute("href",
      "mailto:hotoo.cn@gmail.com?subject=" +
        encodeURIComponent("Detector 识别信息") +
      "&body="+
      encodeURIComponent(
        "请修正我们识别错误的信息：\n\n"+
        "> 注：只需要修改识别错误的部分即可。\n\n"+
        detectedInfo.join("\n")+
        "\n\n=========================\n"+
        "自动识别的原始信息如下（请勿修改）：\n"+a.join("\n")));

    document.getElementById("issues").href = "https://github.com/aralejs/detector/issues/new" +
        "?title=detector%20识别信息"+
        "&body=" +
          encodeURIComponent(
            "请修正我们识别错误的信息：\n\n"+
            "> 注：只需要修改识别错误的部分即可。\n\n"+
            detectedInfo.join("\n") +
            "\n"+
            "\n=========================\n"+
            "自动识别的原始信息如下（请勿修改）：\n\n"+
            detectedInfo.join("\n")+
            "\n\n"+
            a.join("\n")
          );
  });

$(function(){
		$("li:.ui-nav-item-current li:eq(2)").addClass("ui-nav-subitem-current");
	});
  
</script>
<?php include '../inc/footer.php';?>