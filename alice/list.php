<?php include '../inc/header.php';?>

<?php include '../inc/nav.php'; ?>
	
	<div class="ui-table-container">
    <table class="ui-table"><!-- 可以在class中加入ui-table-inbox或ui-table-noborder分别适应不同的情况 -->
        <thead>
            <tr>
                <th>创建时间</th>
                <th>名称<em class="ft-bar">|</em>交易号</th>
                <th>对方</th>
                <th>金额<em class="ft-bar">|</em>明细</th>
                <th>状态</th>
                <th>操作</th>
                <th>备注</th>
            </tr>
        </thead><!-- 表头可选 -->
        <tbody>
            <tr>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
            </tr>
            <tr class="ui-table-split">
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
            </tr>
            <tr>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
            </tr>
            <tr class="ui-table-split">
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
            </tr>
            <tr>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7">
					<div class="ui-paging">
						<span class="ui-paging-info">第<span class="ui-paging-bold">5/7</span>页</span>
						<a href="#" class="ui-paging-prev">
							<i class="iconfont" title="左三角形">&#xF039;</i> 上一页
						</a>
						<a href="#" class="ui-paging-next">
							下一页 <i class="iconfont" title="右三角形">&#xF03A;</i>
						</a>
					</div>
				</td>
            </tr>
        </tfoot><!-- 表尾可选 -->
    </table>
</div>
	
另一种分页风格：
	<div class="ui-paging">
    <a href="#" class="ui-paging-prev">
        <i class="iconfont" title="左三角形">&#xF039;</i> 上一页
    </a>
    <a href="#" class="ui-paging-item">1</a>
    <a href="#" class="ui-paging-item ui-paging-current">2</a>
    <a href="#" class="ui-paging-item">3</a>
    <a href="#" class="ui-paging-item">4</a>
    <a href="#" class="ui-paging-item">5</a>
    <a href="#" class="ui-paging-item">6</a>
    <a href="#" class="ui-paging-item">7</a>
    <span class="ui-paging-ellipsis">...</span>
    <a href="#" class="ui-paging-item">24</a>
    <a href="#" class="ui-paging-next">
        下一页 <i class="iconfont" title="右三角形">&#xF03A;</i>
    </a>
    <span class="ui-paging-info"><span class="ui-paging-bold">5/7</span>页</span>
    <span class="ui-paging-which"><input name="some_name" value="6" type="text"></span>
    <a class="ui-paging-info ui-paging-goto" href="#">跳转</a>
</div>


<script>
	document.title += "-- 列表"; 
	$(function(){
		$("#alice_nav li:eq(1)").addClass("ui-nav-subitem-current");
	});
</script>
<?php include '../inc/footer.php';?>