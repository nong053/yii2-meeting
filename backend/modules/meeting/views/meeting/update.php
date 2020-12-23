<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Meeting */

$this->title = 'แก้ไขห้องประชุม: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'จองห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="box box-success box-solid">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> <?= Html::encode($this->title) ?></h3>
    </div>

    <div class="box-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
  </div>
</div>
