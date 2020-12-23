<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Meeting */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'จองห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> <?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">

    <p>
        <?= Html::a('แก้ไข ', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'date_start',
            'date_end',
            // 'created_at',
            // 'updated_at',
            'room.name',
            // 'roomColor',
             [

                 "label" => "สีห้อง",

                 "format" => 'raw',

                 "value" => function($data){

                       return $data->roomColor;

                  }

            ],

            // 'user.firstname',
            'userFullname',
            'status',


        ],
    ]);


     ?>
  </div>
</div>
