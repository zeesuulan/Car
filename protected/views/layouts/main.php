<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8">
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cms.css">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <title>
        <?php echo CHtml::encode($this->pageTitle); ?>
    </title>
</head>

<body>

    <div id="wrap" class="clearfix">
        <ul class="nav nav-pills">
            <span class="navbar-brand">
                <?php echo CHtml::encode(Yii::app()->name); ?></span>
            <?php $this->widget('application.widgets.CBNav', array('items' => array(array('label' => '首页', 'url' => array('/site')), array('label' => '管理预约', 'url' => array('/site/booking', 'view' => 'about')),array('label' => '会员管理', 'url' => array('/member/create')), array('label' => '员工管理', 'url' => array('/site/employee')), array('label' => '店面管理', 'url' => array('/site/store')), array('label' => '退出 ('.Yii::app() -> user -> name.')', 'url' => array('/site/employee'))))); ?>
        </ul>
        <?php $this->widget('application.widgets.CBSiderNav', array( 'items'=>$this->menu )); ?>
        <div class="main_container clearfix">
            <div class="container">
                <?php echo $content; ?>
            </div>
        </div>

    </div>
    <div class="footer">
        Copyright &copy;
        <?php echo date( 'Y'); ?> by 嘉通车友管理系统
        <br/>All Rights Reserved.
        <br/>Powered by Ice
    </div>
</body>

</html>
