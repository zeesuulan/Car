<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cms.css">
    <title>
        <?php echo CHtml::encode($this->pageTitle); ?>
    </title>
</head>

<body>

    <div id="wrap">
        <ul class="nav nav-pills">
            <span class="navbar-brand">
                <?php echo CHtml::encode(Yii::app()->name); ?></span>

            <?php $this->widget('application.widgets.CBNav', array('items' => array(array('label' => '首页', 'url' => array('/site/index')), array('label' => '管理预约', 'url' => array('/site/booking', 'view' => 'about')), array('label' => '员工管理', 'url' => array('/site/employee')), array('label' => '店面管理', 'url' => array('/site/store')), array('label' => '退出 ('.Yii::app() -> user -> name.')', 'url' => array('/site/employee'))))); ?>
        </ul>
    </div>

</body>

</html>
