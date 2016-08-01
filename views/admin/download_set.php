<div class="container content">

  <?php

  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\helpers\ArrayHelper;

  ?>
  <!----><script type="text/javascript">
  window.onload = function()
  {
    //var editor = CKEDITOR.replace( 'NEWS_HEAD_DETAIL' );
    //CKFinder.setupCKEditor( editor, { basePath : 'images/',
    //    rememberLastFolder : True
    //   } ) ;





    CKEDITOR.replace( 'NEWS_HEAD_DETAIL',
    {
      // Link dialog, "Browse Server" button
      filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
      // Image dialog, "Browse Server" button
      filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?type=Images',
      // Flash dialog, "Browse Server" button
      filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?type=Flash',
      // Upload tab in the Link dialog
      filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      // Upload tab in the Image dialog
      filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      // Upload tab in the Flash dialog
      filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    }  );

  };
  </script>







  <!--<script type="text/javascript">
  $(function () {
  CKEDITOR.replace('NEWS_HEAD_DETAIL');// webboard_topic_detail= ชื่อ ฟิวในตาราง
});
</script>-->


<ol class="breadcrumb">
  <li><a href="index.php?r=admin/index">Home</a></li>
  <li><a href="index.php?r=admin/download">Download</a></li>
  <li class="active">Detail</li>
</ol>


<div class="panel panel-default">
  <div class="panel-heading" >
    <!--        <span class="pull-left"><img src="images/home.png"></span>-->
    <!--        <span class="label pull-right label-danger">Danger</span> -->
    <a type="button" href="index.php?r=admin/download" class="btn-u btn-u-xs rounded btn-u-red pull-right">กลับ.</a>


    <h5 class="panel-title">DOWNLOAD</h5>
  </div>
</div>



<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <font color="#3e680b">ข้อมูลดาวน์โหลด</font>
      </a>
    </h4>
  </div>



  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
    <div class="panel-body">


      <?php
      $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
      ?>

      <?=
      $form->field($model, 'DOWNLOAD_TYPE_ID')->dropDownList(
      ArrayHelper::map(Yii::$app->db->createCommand("SELECT * FROM hos_download_type ")->queryAll(), 'DOWNLOAD_TYPE_ID', 'DOWNLOAD_TYPE_NAME'), ['prompt' => '==เลือก==']
    );
    ?>


    <?= $form->field($model, 'DOWNLOAD_NAME')->textInput(['maxlength' => 100]) ?>


    <?= $form->field($model, 'DETAIL')->textarea(['fullPage' => 'true', 'maxlength' => 100, 'id' => 'NEWS_HEAD_DETAIL']) ?>









    <div class="form-group" align="right">
      <?= Html::submitButton('บันทึก..', ['class' => 'btn btn-primary btn-sm', 'name' => 'signup-button']) ?>
    </div>




    <?php ActiveForm::end(); ?>

  </div>
</div>
</div>

</div>
