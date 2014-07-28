<?php
/* @var $this NoticeController */
/* @var $model Notice */

$this->breadcrumbs=array(
	'公告'=>array('index'),
	'管理公告',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#notice-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理公告</h1>

<p>
可以通过表格中的输入快速搜索想要找的数据信息
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'notice-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		'content',
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
    $("select").addClass("form-control").css({"width": "20%", "display":"inline-block", "margin-left":"15px"})
})
</script>