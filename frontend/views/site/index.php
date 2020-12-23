<?php
use yii\helpers\Html;

use yii\widgets\ActiveForm;

use yii\helpers\Url;


// echo Yii::$app->urlManagerBackend->createAbsoluteUrl(['site/index','id'=>4])."<br>";
// echo Yii::$app->urlManagerBackend->createUrl(['site/index','id'=>4])."<br>";
// echo Yii::$app->urlManagerBackend->getBaseUrl()."<br>";
// echo Yii::$app->urlManagerBackend->getHostInfo()."<br>";
// echo Yii::$app->urlManagerBackend->getScriptUrl()."<br>";

?>



    <div class="row ">

      <div class="col-md-12">
        <!-- <img width="100%" src="https://dict.rtaf.mi.th/images/image/main-site/RTAF-Logo-Main-blue.png"> -->

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <?php echo Html::img('@web/banner01.jpg', ['width'=>'100%', 'class'=>'d-block w-100']) ?>
              <!-- <img width="100%" src="../banner01.jpg" class="d-block w-100" alt="..."> -->
              <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">1 slide</text></svg> -->
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


      </div>

    </div>

    <div class="row ">

      <div class="col-md-12">

        <nav aria-label="breadcrumb" style="margin-top:15px;">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><h1 style ="">	ข่าวประชาสัมพันธ์	</h1></li>
          </ol>
        </nav>

        <!-- <h1 style ="padding:15px;">	ข่าวประชาสัมพันธ์	</h1> -->
        <ul class="list-group">

          <?php
          for($i=0;$i<15;$i++){
            ?>
            <li class="list-group-item">
              <div class="media">
              <img width="100"  src="https://dict.rtaf.mi.th/images/News/63/20201215/3.JPG" class="mr-3 shadow" alt="...">
              <!-- <svg class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">64x64</text></svg> -->
              <div class="media-body">
                <h5 class="mt-0"><u>ทสส.ทอ. ทดสอบร่างกายของข้าราชการและพนักงานราชการ</u></h5>
                พล.อ.ต.วิเชียร  เรืองพระยา รอง จก.ทสส.ทอ.
               เป็นประธานในพิธีเปิดการทดสอบสมรรถภาพร่างกายของข้าราชการและพนักงานราชการ ทสส.ทอ.
               วันศุกร์ที่ ๗ ก.ค.๖๓ เวลา ๐๗๐๐
               ณ สวนเฉลิมพระเกียรติฯ ฉลองราชสมบัติครบ ๕๐ ปี (หัวสนาม)
              </div>
              </div>
            </li>
            <?php
          }
          ?>






      </ul>
      </div>
    </div>




    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
