<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'员工管理'=>array('index'),
	'管理员工信息',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employee-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
	#employee-grid_c0{
		width: 10%;
	}
	#employee-grid_c1{
		width: 20%;
	}
	#employee-grid_c3{
		width: 20%;
	}
</style>
<h1>管理员工信息</h1>

<p>
可以通过表格中的输入快速搜索想要找的数据信息
</p>

<?php echo CHtml::link('按照店面搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'store_list' => $this->store_list
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'template'=>'{pager}{summary}{items}{pager}',
	'columns'=>array(
		'id',
		'name',
		'store.name',
		'phone',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script type="text/javascript">
$(function() {
    $("input").addClass("form-control")
    $("input[type=submit]").removeClass("form-control").addClass("btn btn-default")
    $("label").addClass("control-label col-sm-2")
    $("form").addClass("form-horizontal")
    $(".row").addClass("form-group")
    $("select").addClass("form-control").css({"width": "20%", "display":"inline-block", "margin-left":"20px"})
})
</script>