<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Meeting;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MeetingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'จองห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> <?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">

    <p>
        <?= Html::a('จองห้องประชุม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'date_start',
            'date_end',
            //'created_at',
            //'updated_at',
            'room.name',
            'userFullname',
            //'status',

            [
                'attribute'=>'status',
                'value'=>function($model){
                    return $model->status;
                },
                'filter'=>Html::activeDropDownList($searchModel,'status',ArrayHelper::map(Meeting::find()->all(),'status','status'),['class'=>'form-control'])
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

  </div>
</div>
