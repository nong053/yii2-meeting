<?php
namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\models\Meeting;

class RestmeetingController extends ActiveController
{
	
    public $modelClass = 'common\models\Meeting';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}