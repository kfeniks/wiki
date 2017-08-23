<?php

/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content center-block">

        <?= ListView::widget([
            'dataProvider' => $listDataProvider,
            'itemView' => '_list',
            'layout'=>"{items}",

            'pager' => [
                'firstPageLabel' => 'Первая',
                'lastPageLabel' => 'Последняя',
                'nextPageLabel' => '>>',
                'prevPageLabel' => '<<',
                'maxButtonCount' => 5,
            ],

            'options' => [
                'tag' => 'div',
                'class' => 'row',
                'id' => 'news-list',],
            'itemOptions' => [
                'tag' => 'div',
                'class' => 'col-lg-4 text-center',
            ],
            'emptyText' => '<b>Список разделов пуст</b>.'
        ]);
        ?>

    </div>
</div>
