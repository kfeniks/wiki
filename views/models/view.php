<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
?>

<div class="body-content center-block">

    <h1><?= Html::encode($brandName) ?></h1>

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
        'emptyText' => '<b>Список моделей данного бренда пуст</b>.'
    ]);
    ?>
    <?php if(Yii::$app->request->referrer !== null){?>
        <p><a href="<?= Yii::$app->request->referrer ?>">Назад</a></p>
    <?php } ?>
</div>