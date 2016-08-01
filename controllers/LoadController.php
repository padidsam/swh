<?php
namespace app\controllers;
use yii;

class LoadController extends \yii\web\Controller {

  public function actionViews($id = Null)
  {
    if (!empty($id)){

      $drU = \app\models\LoadModels::findOne($id);
      $drU->USER_VIEW = $drU->USER_VIEW + 1;
      $drU->update(array('USER_VIEW'));


      $Query = "SELECT * FROM hos_download
      WHERE ID=$id
      ORDER BY ID DESC";

      try {
        $getData = \Yii::$app->db->createCommand($Query)->queryAll();
      } catch (\yii\db\Exception $e) {
        throw new \yii\web\ConflictHttpException('Error!! พบปัญหากับคำสั่ง SQL ดังนี้ ' . $e);
      }

      $dataProvider = new \yii\data\ArrayDataProvider([
        'allModels' => $getData,
        'pagination' => False,
      ]);

      return $this->render('views', [
        'dataProvider' => $dataProvider,
        'sql' => $Query
      ]);

    }
  }

}

?>
