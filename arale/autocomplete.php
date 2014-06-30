<?php include '../inc/header.php';?>

<?php include '../inc/nav.php';?>

	<div style="padding:40px 0px 80px 5%">
		<p>最简单的方式只需要提供 trigger 和 datasource。</p>

		<p>基础功能
			<input id="simpleTrigger" type="text" style="width:146px" value=""  placeholder="请输入 a 查看效果" />
			<a href="#" id="acTrigger3-extra" data-status="on">开启</a>
		</p>
		
		<p>模糊匹配
			<input id="middleTrigger" type="text" style="width:146px" value=""  placeholder="请输入 r 查看效果" />
			
		</p>
		<p>自定义模板
		<input id="areaTrigger" type="text" value="" autocomplete="off" style="width:146px" />
		</p>
	</div>
	
<script id="template" type="text/x-handlebars-template">
<div class="ui-select">
  <ul class="ui-select-content" data-role="items">
    {{#if items}}
    {{#each items}}
    <li data-role="item" class="ui-select-item" data-value="{{matchKey}}">
        <a href="#">{{matchKey}}</a>
    </li>
    {{/each}}
    {{/if}}
  </ul>
</div>
</script>
<style>
.ui-select-item-hl {background: cyan;}
</style>
<script>
	document.title += "--自动补齐"; 
	
$(function(){

	seajs.use('autocomplete', function(AutoComplete) {
		var ac = new AutoComplete({
			trigger: '#simpleTrigger',
			dataSource: ['abc', 'abd', 'abe', 'acd','alive','alike','ahead','airline','aircraft','airport'],
			html: '{{{highlightItem label}}}',
			selectFirst: true,
			width: 150,
			height: 60,
			 template: $('#template').html(),
			classPrefix: 'ui-select---'
		}).render();
		ac.element.children().css('overflow', 'scroll');
		$('#acTrigger3-extra').click(function(e) {
			e.preventDefault();
			var o = $(this), status = (o.html() === '开启');
			o.html(status? '关闭' : '开启')
			ac.set('disabled', status);
		});
	});
	
	seajs.use(['autocomplete', '$'], function(AutoComplete, $) {
		new AutoComplete({
			trigger: '#middleTrigger',
			dataSource: ['abord', 'able', 'about', 'acd','alive','alike','ahead','airline','aircraft','airport','import'],
			html: '{{{highlightItem label}}}',
			filter:'stringMatch',
			selectFirst: true,
			width: 150
		}).render();
	});
	
	seajs.use(['autocomplete', '$'], function(AutoComplete, $) {
		 var AutoCompleteX = AutoComplete.extend({
			_isEmpty: function() {	
			  return false;
			}
		});
    var ac = new AutoCompleteX({
        trigger: '#areaTrigger',
        header: '<div class="{{classPrefix}}-header">筛选省市：</div>',
        footer: '<div class="{{classPrefix}}-footer">搜索 {{query}} 的{{length}}个结果</div>',
        html: '<strong>{{city}}</strong><span>&nbsp;{{prov}}</span>',
        dataSource: [
          {city: '上海', prov: '上海', label: '上海', value: 'shanghai', alias: ['上海']},
          {city: '苏州', prov: '江苏', label: '苏州', value: 'suzhou', alias: ['苏州']},
          {city: '深圳', prov: '广州', label: '深圳', value: 'shenzhen', alias: ['深圳']},
          {city: '沈阳', prov: '辽宁', label: '沈阳', value: 'shenyang', alias: ['沈阳']},
		  {city: '成都', prov: '四川', label: '成都', value: 'chengdu', alias: ['成都']},
		  {city: '南充', prov: '四川', label: '南充', value: 'nanchong', alias: ['南充']},
		  {city: '乐山', prov: '四川', label: '乐山', value: 'leshan', alias: ['乐山']},
		  {city: '绵阳', prov: '四川', label: '绵阳', value: 'mianyang', alias: ['绵阳']},
		  {city: '德阳', prov: '四川', label: '德阳', value: 'deyang', alias: ['德阳']},
		  {city: '宜宾', prov: '四川', label: '宜宾', value: 'yibin', alias: ['宜宾']},
		  {city: '自贡', prov: '四川', label: '自贡', value: 'zigong', alias: ['自贡']},
		  {city: '达州', prov: '四川', label: '达州', value: 'dazhou', alias: ['达州']},
		  {city: '泸州', prov: '四川', label: '泸州', value: 'luzhou', alias: ['泸州']},
		  {city: '雅安', prov: '四川', label: '雅安', value: 'yaan', alias: ['雅安']},
		  {city: '眉山', prov: '四川', label: '眉山', value: 'meishan', alias: ['眉山']},
		  {city: '遂宁', prov: '四川', label: '遂宁', value: 'suining', alias: ['遂宁']},
		  {city: '广安', prov: '四川', label: '广安', value: 'guangan', alias: ['广安']},
		  {city: '万源', prov: '四川', label: '万源', value: 'wanyuan', alias: ['万源']},
		  {city: '资阳', prov: '四川', label: '资阳', value: 'ziyang', alias: ['资阳']},
		  {city: '巴中', prov: '四川', label: '巴中', value: 'bazhong', alias: ['巴中']},
		  {city: '广元', prov: '四川', label: '广元', value: 'guangyuan', alias: ['广元']},
		  {city: '万州', prov: '重庆', label: '万州', value: 'wanzhou', alias: ['万州']},
        ],
        width: 150
    }).render();

    ac.element.on('click', '#xxx', function() {
      console.log(this);
    });
	ac.input.on('focus', function() {
      ac.show();
    });
});

});

</script>
<?php include '../inc/footer.php';?>