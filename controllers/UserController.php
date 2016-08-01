<?php
namespace app\controllers;
use yii;
use app\controllers\Session;

class UserController extends \yii\web\Controller {
  public $enableCsrfValidation = false;
  public function actionLogin()
  {
    return $this->render('Login');
  }


  public function actionCheck()
  {
    $sql = "SELECT * FROM hos_user WHERE USERNAME ='$_POST[txt_username]' AND PASSWORD=MD5('$_POST[txt_password]') ";
    $ds = Yii::$app->db->createCommand($sql)->queryAll();
    //$list = Yii::$app->db->createCommand($sql)->queryAll();
    if (!empty($ds)) { // connect success
      foreach ($ds as $dss) {

      }

      $model = new \app\models\LogModels();
      $model->USERNAME = $_POST['txt_username'];
      $model->DATE_TIME_LOGIN = date('Y-m-d H:i:s');
      $model->save();


      Yii::$app->session->set('my_user_id', $dss['ID']);
      Yii::$app->session->set('my_username', $dss['USERNAME']);
      Yii::$app->session->set('my_fullname', $dss['FULLNAME']);
      Yii::$app->session->set('my_user_type', $dss['USER_TYPE']);
      //Yii::$app->session->get('xx');
      if ($dss['USER_TYPE']=='ADMIN')  {
        $this->redirect('index.php?r=admin/index');
      }else if ($dss['USER_TYPE']=='USER') {
        $this->redirect('index.php');
      }

    } else {
      $this->redirect('index.php');
      //return $this->render('login');
    }

  }




public function actionLogout()
{
      Yii::$app->session->remove('my_user_id');
      Yii::$app->session->remove('my_username');
      Yii::$app->session->remove('my_fullname');
      Yii::$app->session->remove('my_user_type');

    return  $this->redirect('index.php?r=user/login');
}


public function actionSuccess()
{
  return $this->render('success');
}

}


?>
