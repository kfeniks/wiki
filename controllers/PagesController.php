<?php

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use app\models\Pages;

class PagesController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        $models = Pages::find()->where(['models_id' => $id])->one();
        if (($models !== null)  ) {
            $modelsName = $models->models->models_name;
            $brandName = $models->models->brand->brand_name;
            $dataProvider = new ActiveDataProvider([
                'query' => Pages::find()->where(['models_id' => $id])->orderBy('id ASC'),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);
            return $this->render('index', [
                'listDataProvider' => $dataProvider,
                'modelsName' => $modelsName,
                'brandName' => $brandName
            ]);

        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionView($id)
    {
        $model= Pages::findOne($id);
        if($id && $model !== null){
            return $this->render('view', ['model' => $model]);
        } else {
            Yii::$app->session->setFlash('error', 'Должен быть запрос с id');
            return $this->redirect('site/index');
        }
    }

    public function actionbyModel($id)
    {
        $model= Pages::findOne($id);
        if($id && $model !== null){
            return $this->render('view', ['model' => $model]);
        } else {
            Yii::$app->session->setFlash('error', 'Должен быть запрос с id');
            return $this->redirect('site/index');
        }
    }

    protected function findModel($id)
    {
        if (($model = Pages::findOne($id)) !== null) {
            return $model;
        } else {
            Yii::$app->session->setFlash('error', 'Такого вопроса нет в базе данных.');
            return $this->redirect(['site/index']);
        }
    }

}
