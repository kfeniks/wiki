<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $cat_name
 * @property string $cat_description
 * @property int $parent_id
 * @property string $cat_icon
 * @property int $status
 * @property int $date_created
 * @property int $date_updated
 *
 * @property Category $parent
 * @property Category[] $categories
 * @property Pages[] $pages
 */
class Category extends \yii\db\ActiveRecord
{
    const STATUS_OFF=0;
    const STATUS_ON=1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'date_created'], 'required'],
            [['cat_description'], 'string'],
            [['parent_id', 'status', 'date_created', 'date_updated'], 'integer'],
            [['cat_name', 'cat_icon'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Cat Name',
            'cat_description' => 'Cat Description',
            'parent_id' => 'Parent ID',
            'cat_icon' => 'Cat Icon',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryBrands()
    {
        return $this->hasMany(CategoryBrand::className(), ['cat_id' => 'id']);
    }
}
