<?php
namespace app\controllers;
use yii;

class BoardController extends \yii\web\Controller {

  public function actionIndex()
  {
     $Query="SELECT * FROM hos_board ORDER BY DATE_TIME_UPDATE DESC";

      try {
        $getData = \Yii::$app->db->createCommand($Query)->queryAll();
      } catch (\yii\db\Exception $e) {
        throw new \yii\web\ConflictHttpException('Error!! พบปัญหากับคำสั่ง SQL ดังนี้ ' . $e);
      }

      $dataProvider = new \yii\data\ArrayDataProvider([
        'allModels' => $getData,
        'pagination' => False,
      ]);

      return $this->render('index', [
        'dataProvider' => $dataProvider,
        'sql' => $Query
      ]);
    }


    public function actionViews($id=null)
    {
      if (!empty($id)) {
        if (!empty($_POST)) {
          $model = new \app\models\BoardansModels();
          $model->DATE_TIME_POST = date('Y-m-d H:i:s');
          //$model->DATE_TIME_UPDATE = date('Y-m-d H:i:s');
          $model->BOARD_ID = $id;
          $model->USER_ANSWER = Yii::$app->session->get('my_username');


          $drU = \app\models\BoardModels::findOne($id);
          $drU->DATE_TIME_UPDATE = date('Y-m-d H:i:s') ;
          $drU->update(array('DATE_TIME_UPDATE'));
          //$drU->update(array('USER_READ'));

          if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['board/index']);
          } else {
            return $this->render('views', [
              'model' => $model,
            ]);
          }
        }

        $drU = \app\models\BoardModels::findOne($id);
        $drU->USER_READ = $drU->USER_READ + 1;
        $drU->update(array('USER_READ'));

        if (!empty($id)) {
          //$model = $this->findModel($id);
          $models = \app\models\BoardansModels::findOne($id);
          $model = new \app\models\BoardansModels();
        }

        return $this->render('views', [
          'model' => $model,
        ]);
      }
    }


    public function actionBoardset()
    {

       $model = new \app\models\BoardModels();
      if (!empty($_POST)) {
        if (!empty($id)) {
          $model = \app\models\BoardModels::findOne($id);

          $model->DATE_TIME_UPDATE = date('Y-m-d H:i:s');
          if ($model->load(Yii::$app->request->post()) && $model->update()) {
            return $this->redirect(['board/index']);
          } else {
            return $this->redirect(['board/index']);
          }
        } else {
          //$model->IP = Yii::$app->getRequest()->();
          $model->DATE_TIME_POST = date('Y-m-d H:i:s');
          $model->DATE_TIME_UPDATE = date('Y-m-d H:i:s');

          $model->USER_POST = Yii::$app->session->get('my_username');

          if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['board/index']);
          } else {
            return $this->render('board_set', [
              'model' => $model,
            ]);
          }
        }
      }

      if (!empty($id)) {
        //$model = $this->findModel($id);
        $model = \app\models\BoardModels::findOne($id);
      }

      return $this->render('board_set', [
        'model' => $model,
      ]);

  }
}

  ?>
