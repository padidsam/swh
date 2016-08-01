<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="container content">



<div class="panel panel-default">
    <div class="panel-heading" >
<!--        <span class="pull-left"><img src="images/home.png"></span>-->
<!--        <span class="label pull-right label-danger">Danger</span> -->
        <a type="button" href="index.php" class="btn btn-default btn-xs pull-right">หน้าหลัก.</a>
        <h5 class="panel-title">ลงทะเบียน</h5>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <font color="#3e680b">ลงทะเบียน</font>
            </a>
        </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">


            <?php



            $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
            ?>


<?= $form->field($model, 'USERNAME')->textInput(['maxlength' => 100]) ?>
<?= $form->field($model, 'PASSWORD')->textInput(['maxlength' => 100]) ?>
<?= $form->field($model, 'FULLNAME')->textInput(['maxlength' => 100]) ?>
<?= $form->field($model, 'PHONE')->textInput(['maxlength' => 100]) ?>
<?= $form->field($model, 'EMAIL')->textInput(['maxlength' => 100]) ?>



            <div class="form-group" align="right">
                <?= Html::submitButton('บันทึก..', ['class' => 'btn btn-primary btn-sm', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
</div>
