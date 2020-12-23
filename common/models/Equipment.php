<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "equipment".
 *
 * @property int $id รหัสอุปกรณ์
 * @property string $equipment ชื่ออุปกรณ์
 * @property string $description รายละเอียดอุปกรณ์
 * @property string $photo รูปอุปกรณ์
 *
 * @property Uses[] $uses
 * @property Meeting[] $meetings
 */
class Equipment extends \yii\db\ActiveRecord
{
    public $equipment_img;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['equipment', 'description', 'photo'], 'required'],
            [['description'], 'string'],
            [['equipment', 'photo'], 'string', 'max' => 100],
            [['equipment_img'], 'file', 'skipOnEmpty' => true,'on'=>'update','extensions'=>'jpg,png,gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสอุปกรณ์',
            'equipment' => 'ชื่ออุปกรณ์',
            'description' => 'รายละเอียดอุปกรณ์',
            'photo' => 'รูปอุปกรณ์',
            'equipment_img' => 'รูปอุปกรณ์',
        ];
    }

    /**
     * Gets query for [[Uses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUses()
    {
        return $this->hasMany(Uses::className(), ['equipment_id' => 'id']);
    }

    /**
     * Gets query for [[Meetings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMeetings()
    {
        return $this->hasMany(Meeting::className(), ['id' => 'meeting_id'])->viaTable('uses', ['equipment_id' => 'id']);
    }
}
