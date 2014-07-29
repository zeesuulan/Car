<?php
/* @var $this ActiveController */
/* @var $model Active */

$this->breadcrumbs=array(
	'活动管理'=>array('index'),
	'活动管理',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#active-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>活动管理s</h1>

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
	'id'=>'active-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'content',
		'member_price',
		'non_member_price',
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