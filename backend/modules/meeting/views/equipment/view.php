<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Equipment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="equipment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?=Html::img('uploads/equipment/'.$model->photo, ['class'=>'thumbnail', 'width'=>150]);?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'equipment',
            'description:ntext',
            // 'photo',
        ],
    ]) ?>

</div>
