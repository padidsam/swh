<?php
namespace app\controllers;
use yii;

class NewsController extends \yii\web\Controller {

  public function actionViews($id = Null)
  {

    if (!empty($id)) {
      $drU = \app\models\NewsModels::findOne($id);
      $drU->USER_VIEW = $drU->USER_VIEW + 1;
      $drU->update(array('USER_VIEW'));


      $Query = "SELECT * FROM hos_news
      WHERE NEWS_ID=$id
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

      return $this->render('views', [
        'dataProvider' => $dataProvider,
        'sql' => $Query
      ]);
    }

  }


public function actionIndex($type=null)
{
  if (!empty($type)) {

    $Query = "SELECT * FROM hos_news
    WHERE NEWS_TYPE_ID=$type AND ACTIVE='True'
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

    return $this->render('shows', [
      'dataProvider' => $dataProvider,
      'sql' => $Query
    ]);
  } else {

    $Query = "SELECT * FROM hos_news hn
    LEFT OUTER JOIN hos_news_type hnt ON hn.NEWS_TYPE_ID=hnt.NEWS_TYPE_ID
    WHERE ACTIVE='True'
    ORDER BY NEWS_ID,hn.NEWS_TYPE_ID DESC";

    try {
      $getData = \Yii::$app->db->createCommand($Query)->queryAll();
    } catch (\yii\db\Exception $e) {
      throw new \yii\web\ConflictHttpException('Error!! พบปัญหากับคำสั่ง SQL ดังนี้ ' . $e);
    }

    $dataProvider = new \yii\data\ArrayDataProvider([
      'allModels' => $getData,
      'pagination' => False,
    ]);

    return $this->render('showsall', [
      'dataProvider' => $dataProvider,
      'sql' => $Query
    ]);
  }
}

}

  ?>
