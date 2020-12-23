<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id รหัสห้อง
 * @property string $name ชื่อห้อง
 * @property string $description รายละเอียดห้อง
 * @property string $photo รูปห้อง
 * @property string $color สีห้อง
 *
 * @property Meeting[] $meetings
 */
class Room extends \yii\db\ActiveRecord
{
    public $room_img;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'photo', 'color'], 'required'],
            [['name'], 'string', 'max' => 45],
            [['description', 'photo'], 'string', 'max' => 100],
            [['color'], 'string', 'max' => 7],
            [['room_img'], 'file', 'skipOnEmpty' => true,'on'=>'update','extensions'=>'jpg,png,gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสห้องประชุม',
            'name' => 'ชื่อห้องประชุม',
            'description' => 'รายละเอียดห้อง',
            'photo' => 'รูปห้องประชุม',
            'room_img' => 'รูปห้องประชุม',
            'color' => 'สีห้องประชุม',
        ];
    }

    /**
     * Gets query for [[Meetings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMeetings()
    {
        return $this->hasMany(Meeting::className(), ['room_id' => 'id']);
    }

    public function getRoomColor()
    {
        return "<div style='width:20px; height:20px; background:".$this->color.";'></div>";
    }
}
