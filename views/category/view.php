<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
?>

<div class="body-content center-block">

    <h1><?= Html::encode($catName) ?></h1>

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
        'emptyText' => '<b>Список брендов для данной категории пуст</b>.'
    ]);
    ?>

</div>