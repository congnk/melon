<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';?>
	
<link media="all" href="../css/calendar.css" rel="stylesheet">
	<span> 复杂的多重日期范围选择 </span>
<div style="width:600px">	
	<div class="ui-box">
		<div class="ui-box-head">
			<h3 class="ui-box-head-title">时间范围</h3>
			<span class="ui-box-head-text">控制下面第二个日期选择框的选择范围</span>
			<a href="#" class="ui-box-head-more">更多</a>
		</div>
		<div class="ui-box-container">
			<div class="ui-box-content">
				<div style="margin:20px 10px 0">
					请选择日期：
					<input id="range_start" type="text" />
					<input id="range_end" type="text" />
				</div>
			</div>
		</div>
	</div>
	<div class="ui-box ui-box-follow">
		<div class="ui-box-head">
			<h3 class="ui-box-head-title">具体日期选择</h3>
			<span class="ui-box-head-text">这个日期选择的范围还受到上面选择器的动态控制</span>
			<a href="#" class="ui-box-head-more">更多</a>
		</div>
		<div class="ui-box-container">
			<div class="ui-box-content">
				<div style="margin:20px 10px 0">
					请选择日期：
					<input id="start_cal" type="text" />
					<input id="end_cal" type="text" />
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.title += "--日历"; 

  seajs.config({
    alias: {
		'calendarcss':'arale/calendar/1.0.0/calendar.css',
		'cookie':'arale/cookie/1.0.2/cookie'
	
    }
  });
 
seajs.use(['calendar','cookie'], function(Calendar,Cookie) {

	/*Cookie.set("range_start","2012-01-01");
	Cookie.set("range_end","2014-07-28");*/
	
	var range_start = Cookie.get("range_start");
	var range_end = Cookie.get("range_end");
	
	if(!range_start){
		range_start='2014-06-03';
	}
	if(!range_end){
		range_end = '2014-06-27';
	}
	$("#range_start").val(range_start);
	$("#range_end").val(range_end);
	
    var a1 = new Calendar({trigger: '#range_start', range: [null, null]})
    var a2 = new Calendar({trigger: '#range_end', range: [null, null]})
		
	var c1 = new Calendar({trigger: '#start_cal', range: [range_start, range_end]})
    var c2 = new Calendar({trigger: '#end_cal', range: [range_start, range_end]})
	
	//
	a1.on('selectDate',function(date){
		var selected_start = $("#start_cal").val();
		range_start=outPutDate(date);
		Cookie.set("range_start",range_start,{
			expires: 7
		});
		c1.range([date,range_end]);
		
		if(selected_start<range_start){
			c2.range([ range_start , range_end ]) ;
		}else{
			c2.range([ selected_start , range_end ]) ;
		}
	});
	
	a2.on('selectDate',function(date){
		var selected_end = $("#end_cal").val();
		range_end = outPutDate(date) ;
		Cookie.set("range_end",range_end,{
			expires: 7
		});
		c2.range([range_start,date]);
		
		if( selected_end < range_end){
			c1.range([ range_start , selected_end ]) ;
		}else{
			c1.range([ range_start , range_end ]) ;
		}
	});
	
    c1.on('selectDate', function(date) {
        c2.range([date, range_end]);
	});

    c2.on('selectDate', function(date) {
        c1.range([range_start, date]);
    })
	
	function outPutDate(date){
		var str = date.year()+"-"+padLeft((date.month()+1),2)+"-"+date.date() ;
		return str ;
	}
	
});

seajs.use('cookie', function(Cookie) {

	Cookie.set("msg","小小熊你好");
	var msg = Cookie.get("msg");
    Cookie.remove('bar', {
        domain: 'example.com',
        path: '/'
    });
	
});

//在数字前面加0，
function padLeft(str, length) {
	if (str.length >= length)
		return str;
	else
		return padLeft("0" + str, length);
}
</script>
<?php include '../inc/footer.php';?>