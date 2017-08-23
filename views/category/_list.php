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
<a href="<?=Yii::$app->urlManager->createUrl(["models/view", "id" => $model->brand->id])?>"
   title="<?= Html::encode($model->brand->brand_name) ?>">
    <img data-src="holder.js/140x140" title="<?=$model->brand->brand_name?>" class="img-thumbnail" alt="140x140" src="/img/<?=$model->brand->brand_icon?>" style="width: 180px; height: 180px;">
</a>
