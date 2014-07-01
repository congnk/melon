<?php include '../inc/header.php';?>

    <body>
	<?php include '../inc/nav.php';?>

<style type="text/css">
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
	
<script type="text/javascript">
	document.title += "--Switchable"; 
$(function(){
seajs.use(['arale/switchable/1.0.2/accordion'], function(Accordion, $) {
    accordion = new Accordion({
        element: '#accordion-demo-2',
        multiple: false,
        activeIndex: -99
    }).render();
});
});	
</script>
	</body>
</html>