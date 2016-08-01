<?php

namespace app\controllers;
use yii;

class AdminController extends \yii\web\Controller{



public function beforeAction($event)
   {
     if  (Yii::$app->session->get('my_user_type') =='ADMIN'){
       return $this->render('index');
     } else {
       return $this->redirect(['site/index']);
        //echo 'xxxx';
     }
   }



  public function actionIndex()
{


  if  (Yii::$app->session->get('my_user_type') =='ADMIN'){
    return $this->render('index');
  } else {
    return $this->redirect(['site/index']);
  }

  }

  public function actionNewstype($id=null)
  {
    $Query = "SELECT * FROM hos_news_type ORDER BY NEWS_TYPE_ID DESC";
    try {
      $getData = \Yii::$app->db->createCommand($Query)->queryAll();
    } catch (\yii\db\Exception $e) {
      throw new \yii\web\ConflictHttpException('Error!! พบปัญหากับคำสั่ง SQL ดังนี้ ' . $e);
    }
    $dataProvider = new \yii\data\ArrayDataProvider([
      'allModels' => $getData,
      'pagination' => False,
    ]);

    return $this->render('newstype', [
      'dataProvider' => $dataProvider,
      'sql' => $Query
    ]);
  }



  public function actionNewstypeset($id=null)///เพิ่ม แก้ไข
  {
    $model = new \app\models\NewstypeModels();
    if (!empty($_POST)) {
      if (!empty($id)) {
        $model = \app\models\NewstypeModels::findOne($id);
        //$model->DATE_TIME_UPDATE = date('Y-m-d H:i:s');
        if ($model->load(Yii::$app->request->post()) && $model->update()) {
          return $this->redirect(['admin/newstype']);
        } else {
          return $this->redirect(['admin/newstype']);
        }
      } else {
        //$model->DATE_TIME_UPDATE = date('Y-m-d H:i:s');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['admin/newstype']);
        } else {
          return $this->render('newstype_set', [
            'model' => $model,
          ]);
        }
      }
    }

    if (!empty($id)) {
      //$model = $this->findModel($id);
      $model = \app\models\NewstypeModels::findOne($id);
    }

    return $this->render('newstype_set', [
      'model' => $model,
    ]);
  }



public function actionNewstypedel($id=null)
{
      \app\models\NewstypeModels::findOne($id)->delete($id);
      return $this->redirect(['admin/newstype']);
}




public function actionNews($id=null)
{
  $Query = "SELECT *
   FROM hos_news HN
   LEFT OUTER JOIN hos_news_type HT ON HN.NEWS_TYPE_ID=HT.NEWS_TYPE_ID
   ORDER BY NEWS_ID DESC";

  try {
    $getData = \Yii::$app->db->createCommand($Query)->queryAll();
  } catch (\yii\db\Exception $e) {
    throw new \yii\web\ConflictHttpException('Error!! พบปัญหากับคำสั่ง SQL ดังนี้ ' . $e);
  }
  $dataProvider = new \yii\data\ArrayDataProvider([
    'allModels' => $getData,
    'pagination' => False,
  ]);

  return $this->render('news', [
    'dataProvider' => $dataProvider,
    'sql' => $Query
  ]);
}




public function actionNewsset($id=null)///เพิ่ม แก้ไข
{
  $model = new \app\models\NewsModels();
  if (!empty($_POST)) {
    if (!empty($id)) { //แก้ไข
      $model = \app\models\NewsModels::findOne($id);
      $model->DATE_TIME_UPDATE = date('Y-m-d H:i:s');


      if ($model->load(Yii::$app->request->post()) && $model->update()) {
        return $this->redirect(['admin/news']);
      } else {
        return $this->redirect(['admin/news']);
      }
    } else { //เพิ่ม
      $model->DATE_TIME_POST = date('Y-m-d H:i:s');
      $model->USER_POST = Yii::$app->session->get('my_username');

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['admin/news']);
      } else {
        return $this->render('news_set', [
          'model' => $model,
        ]);
      }
    }
  }

  if (!empty($id)) {
    //$model = $this->findModel($id);
    $model = \app\models\NewsModels::findOne($id);
  }

  return $this->render('news_set', [
    'model' => $model,
  ]);
}


public function actionNewsdel($id=null)
{
      \app\models\NewsModels::findOne($id)->delete($id);
      return $this->redirect(['admin/news']);
}



public function actionDownload()
{

  $Query = "SELECT * FROM hos_download ORDER BY ID DESC";
  try {
    $getData = \Yii::$app->db->createCommand($Query)->queryAll();
  } catch (\yii\db\Exception $e) {
    throw new \yii\web\ConflictHttpException('Error!! พบปัญหากับคำสั่ง SQL ดังนี้ ' . $e);
  }
  $dataProvider = new \yii\data\ArrayDataProvider([
    'allModels' => $getData,
    'pagination' => False,
  ]);

  return $this->render('download', [
    'dataProvider' => $dataProvider,
    'sql' => $Query
  ]);

}


public function actionDownloadset($id='')
{
  $model = new \app\models\DownloadModels();
if (!empty($_POST)) {
  if (!empty($id)) {
    $model = \app\models\DownloadModels::findOne($id);
    $model->DATE_TIME_UPDATE= date('Y-m-d H:i:s');//วันที่อัพเดช
    $model->USER_POST = Yii::$app->session->get('my_username');

    if ($model->load(Yii::$app->request->post()) && $model->update()) {
      return $this->redirect(['admin/download']);
    } else {
      return $this->redirect(['admin/download']);
    }
  } else {
    $model->DATE_TIME_SAVE = date('Y-m-d H:i:s');//วันที่เพิ่ม
    $model->USER_POST = Yii::$app->session->get('my_username');

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      return $this->redirect(['admin/download']);
    } else {
      return $this->render('download_set', [
        'model' => $model,
      ]);
    }
  }
}

if (!empty($id)) {
  //$model = $this->findModel($id);
  $model = \app\models\DownloadModels::findOne($id);
}

return $this->render('download_set', [
  'model' => $model,
]);
}


public function actionDownloaddel($id=null)
{
      \app\models\DownloadModels::findOne($id)->delete($id);
      return $this->redirect(['admin/download']);
}


}


?>
