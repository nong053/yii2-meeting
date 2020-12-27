<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "calendar".
 *
 * @property int $id รหัส
 * @property string $date วันเวลา
 * @property int $val ข้อมูล
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calendar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date', 'val'], 'required'],
            [['id', 'val'], 'integer'],
            [['date'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'val' => 'Value',
        ];
    }
}
