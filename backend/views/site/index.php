<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'ระบบจองห้องประชุม';
?>
<div class="site-index">

    <div class="jumbotron box-shadow" style="border:5px solid #dddddd;">

        <?php echo Html::img('@web/images/room-01.jfif', ['width'=>'325', 'class'=>'d-block w-100']) ?>
        <?php echo Html::img('@web/images/room-02.jfif', ['width'=>'', 'class'=>'d-block w-100']) ?>
        <?php echo Html::img('@web/images/room-03.jfif', ['width'=>'', 'class'=>'d-block w-100']) ?>
           <p class="lead">www.booking-meetingroom.com</p>

         <p><a class="btn btn-lg btn-success" href="./index.php?r=meeting/meeting/create">จองห้องประชุม</a></p>
    </div>


</div>
