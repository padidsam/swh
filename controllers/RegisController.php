<?php
namespace app\controllers;
use yii;

class RegisController extends \yii\web\Controller {

 public function actionIndex()
 {
   $model = new \app\models\RegisModels();
   if (!empty($_POST)) {
     $model = new \app\models\RegisModels();
     $model->DATE_TIME_UPDATE = date('Y-m-d H:i:s');
     if ($model->load(Yii::$app->request->post()) && $model->save()) {


           $drU =  \app\models\RegisModels::findOne(Yii::$app->db->getLastInsertID());
           $drU->PASSWORD = md5($drU->PASSWORD);
           $drU->update(array('PASSWORD'));


//
       //return $this->redirect(['user/login']);
       return $this->redirect(['user/success']);
     } else {
       return $this->render('regis', [
         'model' => $model,
       ]);
     }
   }


   return $this->render('regis', [
     'model' => $model,
   ]);
 }

}


?>
