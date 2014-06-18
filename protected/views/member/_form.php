<?php /* @var $this MemberController */ /* @var $model Member */ /* @var $form CActiveForm */ ?>

<div class="form col-sm-6 col-sm-offset-3">

    <?php $form=$this->beginWidget('CActiveForm', array( 'id'=>'member-form', 'enableAjaxValidation'=>false)); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'member_num'); ?>
        <?php echo $form->textField($model,'member_num',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'member_num'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('size'=>15,'maxlength'=>15)); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'dl_id'); ?>
        <?php echo $form->textField($model,'dl_id'); ?>
        <?php echo $form->error($model,'dl_id'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'origin_id'); ?>
        <?php echo $form->dropDownList($model, 'origin_id', $origin_list); ?>
        <?php echo $form->error($model,'origin_id'); ?>
    </div>
    <p class="note">带<span class="required">*</span>号必填</p>
    <div class="form-group buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? '激活' : '修改'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>
<!-- form -->
<script type="text/javascript">
$(function() {
    $("input").addClass("form-control")
    $("input[type=submit]").removeClass("form-control").addClass("btn btn-default")
    $("label").addClass("control-label")
    $("select").addClass("form-control").css({"width": "20%", "display":"inline-block", "margin-left":"20px"})
})
</script>
