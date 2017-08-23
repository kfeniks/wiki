<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string $brand_name
 * @property string $brand_description
 * @property string $brand_icon
 * @property int $status
 * @property int $date_created
 * @property int $date_updated
 *
 * @property CategoryBrand[] $categoryBrands
 * @property Models[] $models
 * @property Pages[] $pages
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_name', 'date_created'], 'required'],
            [['brand_description'], 'string'],
            [['status', 'date_created', 'date_updated'], 'integer'],
            [['brand_name', 'brand_icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_name' => 'Brand Name',
            'brand_description' => 'Brand Description',
            'brand_icon' => 'Brand Icon',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryBrands()
    {
        return $this->hasMany(CategoryBrand::className(), ['band_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModels()
    {
        return $this->hasMany(Models::className(), ['brand_id' => 'id']);
    }
}
