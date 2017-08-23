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
<p><a href="<?=Yii::$app->urlManager->createUrl(["pages/index", "id" => $model->id])?>"
      title="<?= Html::encode($model->models_name) ?>"><img data-src="holder.js/140x140" title="<?=$model->models_name?>"
                                                            class="img-thumbnail" alt="140x140" src="/img/<?=$model->models_icon?>" style="width: 180px; height: 180px;"></a></p>
<p><a href="<?=Yii::$app->urlManager->createUrl(["pages/index", "id" => $model->id])?>"
      title="<?= Html::encode($model->models_name) ?>">
        <?= Html::encode($model->models_name) ?>
    </a></p>
