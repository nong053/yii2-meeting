<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;
use common\models\Room;
use common\models\Person;

/* @var $this yii\web\View */
/* @var $model common\models\Meeting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meeting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'date_start')->textInput() ?> -->
    <?=  $form->field($model, 'date_start')->widget(DateTimePicker::classname(), [
       'options' => ['placeholder' => 'ถึงวันที่'],
       'pluginOptions' => [
         'autoclose' => true,
          'format' => 'yyyy-mm-dd hh:ii'
       ]
      ]);
      ?>

    <!-- <?= $form->field($model, 'date_end')->textInput() ?> -->
    <?=  $form->field($model, 'date_end')->widget(DateTimePicker::classname(), [
       'options' => ['placeholder' => 'ถึงวันที่'],
       'pluginOptions' => [
         'autoclose' => true,
          'format' => 'yyyy-mm-dd hh:ii'
       ]
      ]);
      ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

   <!--  <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?> -->

    <?= $form->field($model, 'room_id')->dropDownList(ArrayHelper::map(Room::find()->all(),'id','name')) ?>

    <!-- <?=$form->field($model, 'user_id')->dropDownList(ArrayHelper::map(Person::find()->all(),'user_id','firstname')) ?> -->



    <!-- <?= $form->field($model, 'status')->dropDownList([ 'Waiting' => 'Waiting', 'Disapproval' => 'Disapproval', 'Approved' => 'Approved', ], ['prompt' => '']) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
