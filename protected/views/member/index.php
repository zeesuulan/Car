<div class="row">
    <div class="btn-group col-sm-2">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
    </div>
    <form class="form-inline col-sm-3" role="form">
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">会员号
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">会员号</a>
                    </li>
                    <li><a href="#">会员姓名</a>
                    </li>
                    <li><a href="#">发动机号</a>
                    </li>
                    <li><a href="#">驾驶证号</a>
                    </li>
                </ul>
            </div>
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default" type="button">搜索</button>
            </span>
        </div>
    </form>
</div>
<?php $this->widget('zii.widgets.CListView', array( 'dataProvider'=>$dataProvider, 'itemView'=>'_view', )); ?>
<ul class="pagination">
    <li><a href="#">&laquo;</a>
    </li>
    <li><a href="#">1</a>
    </li>
    <li><a href="#">2</a>
    </li>
    <li><a href="#">3</a>
    </li>
    <li><a href="#">4</a>
    </li>
    <li><a href="#">5</a>
    </li>
    <li><a href="#">&raquo;</a>
    </li>
</ul>
