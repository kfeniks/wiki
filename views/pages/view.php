<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<?php
if($model->models_id !== null){

}
?>

<h1><?= Html::encode($model->title) ?></h1>

<?=$model->text?>

    <?php if(Yii::$app->request->referrer !== null){?>
<p><a href="<?= Yii::$app->request->referrer ?>">Назад</a></p>
        <?php } ?>
