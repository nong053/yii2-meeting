<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meeting".
 *
 * @property int $id รหัสการจอง
 * @property string $title เรื่องประชุม
 * @property string $description รายละเอียด
 * @property string $date_start วันเวลาเริ่มต้น
 * @property string $date_end วันเวลาสิ้นสุด
 * @property string|null $created_at เพิ่มเมื่อ
 * @property string|null $updated_at แก้ไขเมื่อ
 * @property int $room_id ห้องประชุม
 * @property int $user_id ผู้จอง
 * @property string|null $status สถานะการจอง
 *
 * @property Person $user
 * @property Room $room
 */
class Meeting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meeting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'date_start', 'date_end', 'room_id', 'user_id'], 'required'],
            [['description', 'status'], 'string'],
            [['date_start', 'date_end', 'created_at', 'updated_at'], 'safe'],
            [['room_id', 'user_id'], 'integer'],
            [['title'], 'string', 'max' => 45],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Person::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสการจอง',
            'title' => 'เรื่องประชุม',
            'description' => 'รายละเอียด',
            'date_start' => 'วันเวลาเริ่มต้น',
            'date_end' => 'วันเวลาสิ้นสุด',
            'created_at' => 'เพิ่มเมื่อ',
            'updated_at' => 'แก้ไขเมื่อ',
            'room_id' => 'ห้องประชุม',
            'user_id' => 'ผู้จอง',
            'status' => 'สถานะการจอง',
            'userFullname'=>'ชื่อ-สกุล(ผู้จอง)'
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Person::className(), ['user_id' => 'user_id']);
    }
    public function getUserFullname()
    {
        return $this->user->firstname." ".$this->user->lastname;
    }


    /**
     * Gets query for [[Room]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
    public function getRoomColor()
    {
        return "<div style='width:20px; height:20px; background:".$this->room->color.";'></div>";
    }

}
