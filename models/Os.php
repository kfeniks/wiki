<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "os".
 *
 * @property int $id
 * @property string $os_name
 * @property string $os_description
 * @property string $os_icon
 * @property int $status
 * @property int $date_created
 * @property int $date_updated
 */
class Os extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'os';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['os_name', 'date_created'], 'required'],
            [['os_description'], 'string'],
            [['status', 'date_created', 'date_updated'], 'integer'],
            [['os_name', 'os_icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'os_name' => 'Os Name',
            'os_description' => 'Os Description',
            'os_icon' => 'Os Icon',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
        ];
    }
}
