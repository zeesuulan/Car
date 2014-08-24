

<div class="form col-sm-6 col-sm-offset-3">

    <?php $form=$this->beginWidget('CActiveForm', array( 'id'=>'member-form', 'enableAjaxValidation'=>false)); ?>

    <?php echo $form->errorSummary($model, $dl_model); ?>

     <div class="form-group clearfix">
        <div class="col-sm-8 clearfix" style="margin-left:-15px;">
            <?php echo $form->labelEx($dl_model,'name'); ?>
            <?php echo $form->textField($dl_model,'name'); ?>
            <?php echo $form->error($dl_model,'name'); ?>
        </div>
        <div class="col-sm-4 clearfix">
            <?php echo $form->labelEx($dl_model,'gender'); ?>
            <?php echo $form->dropDownList($dl_model,'gender', array("1"=>"男", "0"=>"女")); ?>
            <?php echo $form->error($dl_model,'gender'); ?>
        </div>
    </div>

    <div class="form-group clearfix">
        <div class="col-sm-8 clearfix" style="margin-left:-15px;">
            <?php echo $form->labelEx($dl_model,'id_num'); ?>
            <?php echo $form->textField($dl_model,'id_num'); ?>
            <?php echo $form->error($dl_model,'id_num'); ?>
        </div>
        <div class="col-sm-4 clearfix">
            <?php echo $form->labelEx($dl_model,'birthday'); ?>
            <?php echo $form->textField($dl_model,'birthday'); ?>
            <?php echo $form->error($dl_model,'birthday'); ?>
        </div>
    </div>

    <div class="form-group clearfix">
        <div class="col-sm-6 clearfix"  style="margin-left:-15px;padding-right:0">
            <?php echo $form->labelEx($dl_model,'valid_date_start'); ?>
            <?php echo $form->textField($dl_model,'valid_date_start'); ?>
            <?php echo $form->error($dl_model,'valid_date_start'); ?>
        </div>
        <div class="col-sm-6 clearfix" style="padding-right:0">
            <?php echo $form->labelEx($dl_model,'valid_date_end'); ?>
            <?php echo $form->textField($dl_model,'valid_date_end'); ?>
            <?php echo $form->error($dl_model,'valid_date_end'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-8 clearfix"  style="margin-left:-15px;padding-right:0">
            <?php echo $form->labelEx($dl_model,'address'); ?>
            <?php echo $form->textField($dl_model,'address'); ?>
            <?php echo $form->error($dl_model,'address'); ?>
        </div>
        <div class="col-sm-4 clearfix">
            <?php echo $form->labelEx($dl_model,'dl_level'); ?>
            <?php echo $form->dropDownList($dl_model,'dl_level', $dlevel_list); ?>
            <?php echo $form->error($dl_model,'dl_level'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($dl_model,'nationality'); ?>
        <?php echo $form->textField($dl_model,'nationality'); ?>
        <?php echo $form->error($dl_model,'nationality'); ?>
    </div>

     <div class="form-group">
        <?php echo $form->labelEx($dl_model,'firsttime'); ?>
        <?php echo $form->textField($dl_model,'firsttime'); ?>
        <?php echo $form->error($dl_model,'firsttime'); ?>
    </div>

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
    $("select").addClass("form-control").css({"width": "auto"})

    var d_config = {
        format: "yyyy-mm-dd",
        language: 'zh-CN',
        weekStart: 1,
        startView: 2, //选择日子开始
        minView: 2,  //选择日子
        maxView: 5, //选择年份周期
        todayHighlight: true,

    }
    $('#Dl_birthday').datetimepicker(d_config)
    $('#Dl_valid_date_start').datetimepicker(d_config)
    $('#Dl_valid_date_end').datetimepicker(d_config)
    $('#Dl_firsttime').datetimepicker(d_config)
})
</script>
