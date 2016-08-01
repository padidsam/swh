<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//use yii\helpers\ArrayHelper;
?>


<div class="container content">

  <ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php?r=board/index">Webboard</a></li>
    <li class="active">Detail</li>
  </ol>




  <script type="text/javascript">
  window.onload = function ()
  {



    CKEDITOR.replace('DETAIL',
    {
      // Link dialog, "Browse Server" button
      filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
      // Image dialog, "Browse Server" button
      filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
      // Flash dialog, "Browse Server" button
      filebrowserFlashBrowseUrl: '/ckfinder/ckfinder.html?type=Flash',
      // Upload tab in the Link dialog
      filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      // Upload tab in the Image dialog
      filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      // Upload tab in the Flash dialog
      filebrowserFlashUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });

  };
  </script>


  <?php
  $board = Yii::$app->db->createCommand('
  SELECT * FROM hos_board   WHERE ID=' . $_GET['id'] . '    ')->queryAll();
  foreach ($board as $ds) {
    ?>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <font color="#3e680b"><?php echo $ds['BOARD_TITLE'] ?></font>
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <?php echo $ds['BOARD_DETAIL'] ?>
        </div>
      </div>
    </div>

    <?php
  }
  ?>





  <?php
  $boardans = Yii::$app->db->createCommand('SELECT * FROM hos_board_ans
    WHERE BOARD_ID=' . $_GET['id'] . '
    ORDER BY ID DESC')->queryAll();
    foreach ($boardans as $ds) {
      ?>

      <div class="panel panel-success">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <font color="#3e680b"><?php echo $ds['USER_ANSWER'] ?> | <?php echo $ds['DATE_TIME_POST'] ?></font>
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <?php echo $ds['DETAIL'] ?>
          </div>
        </div>
      </div>

      <?php
    }
    ?>




    <?php
    if (Yii::$app->session->get("my_user_id") != '')  {
      ?>


      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <?php
          $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
          ?>
          <?= $form->field($model, 'DETAIL')->textarea(['fullPage' => 'true', 'maxlength' => 5000, 'id' => 'DETAIL']) ?>
          <div class="form-group" align="right">
            <?= Html::submitButton('บันทึก..', ['class' => 'btn btn-primary btn-sm', 'name' => 'signup-button']) ?>
          </div>
          <?php ActiveForm::end(); ?>

        </div>
      </div>

      <?php

    }else{
      ?>



      <div class="panel panel-danger">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">

            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ก รุ ณ า เ ข้ า ใ ช้ ง า น ร ะ บ บ ก่ อ น ต อ บ ก ร ะ ทู้
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            แ จ้ ง ใ ห้ ท ร า บ
          </div>
        </div>
      </div>




      <?php } ?>


    </div>
