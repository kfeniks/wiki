<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;
use yii\helpers\Html;
?>
<div class="body-content center-block">

    <h1><?= Html::encode($brandName) ?> - <?= Html::encode($modelsName) ?></h1>

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
        'emptyText' => '<b>Список советов для данного устройства пуст</b>.'
    ]);
    ?>
    <?php if(Yii::$app->request->referrer !== null){?>
        <p><a href="<?= Yii::$app->request->referrer ?>">Назад</a></p>
    <?php } ?>

</div>