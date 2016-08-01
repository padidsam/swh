<?php
namespace app\controllers;
use yii;

class DepController extends \yii\web\Controller {

  public function actionIndex($id=null)
  {
    if (!empty($id)){

      $Query = "SELECT * FROM hos_department WHERE ID=$id";

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
