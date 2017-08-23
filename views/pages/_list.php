<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21.08.2017
 * Time: 14:49
 */

//Yii::$app->urlManager->createUrl(["q/view", "id" => $model->id])

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<p><a href="<?=Yii::$app->urlManager->createUrl(["pages/view", "id" => $model->id])?>"
   title="<?= Html::encode($model->title) ?>">
    <?= Html::encode($model->title) ?>
</a></p>