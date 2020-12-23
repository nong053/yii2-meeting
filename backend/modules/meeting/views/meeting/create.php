<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Meeting */

$this->title = 'จองห้องประชุม';
$this->params['breadcrumbs'][] = ['label' => 'จองห้องประชุม', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
