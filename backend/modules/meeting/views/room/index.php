<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\meeting\models\RoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> <?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">

    <p>
        <?= Html::a('เพิ่มห้องประชุม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             [
                'attribute'=>'photo',
                'format'=>'html',
                'value'=>function($model){
                    return Html::img('uploads/room/'.$model->photo, ['class'=>'thumbnail', 'width'=>150]);
                }
            ],
            'name',
            'description',
            // 'photo',
            //'color',
             [

                 "label" => "สีห้อง",

                 "format" => 'raw',

                 "value" => function($data){

                       return $data->roomColor;

                  }

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

  </div>
</div>
