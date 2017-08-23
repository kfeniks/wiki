<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "models".
 *
 * @property int $id
 * @property int $brand_id
 * @property string $models_name
 * @property string $models_description
 * @property string $models_icon
 * @property int $status
 * @property int $date_created
 * @property int $date_updated
 *
 * @property Brand $brand
 */
class Models extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'models';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id', 'status', 'date_created', 'date_updated'], 'integer'],
            [['models_name', 'date_created'], 'required'],
            [['models_description'], 'string'],
            [['models_name', 'models_icon'], 'string', 'max' => 255],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Brand ID',
            'models_name' => 'Models Name',
            'models_description' => 'Models Description',
            'models_icon' => 'Models Icon',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Pages::className(), ['models_id' => 'id']);
    }
}
