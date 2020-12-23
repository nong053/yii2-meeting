<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\meeting\models\EquipmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Equipment', ['create'], ['class' => 'btn btn-success']) ?>
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
                    return Html::img('uploads/equipment/'.$model->photo, ['class'=>'thumbnail', 'width'=>150]);
                }
            ],
            'equipment',
            'description:ntext',
            // 'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
