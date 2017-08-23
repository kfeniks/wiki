<?php

namespace app\controllers;

use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use app\models\Models;

class ModelsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        if ((Models::find()->where(['brand_id' => $id]) !== null)  ) {
            $brand = Models::find()->where(['brand_id' => $id])->one();
            $brandName = $brand->brand->brand_name;
            $dataProvider = new ActiveDataProvider([
                'query' => Models::find()->where(['brand_id' => $id])->orderBy('id ASC'),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);
            return $this->render('view', [
                'listDataProvider' => $dataProvider,
                'brandName' => $brandName
            ]);

        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
