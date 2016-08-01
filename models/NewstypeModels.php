<?php
namespace app\models;
use yii;

class NewstypeModels extends yii\db\ActiveRecord{
  public static function tableName() {
    return 'hos_news_type';
  }

  public function rules() {
    return [
      [['NEWS_TYPE_NAME'], 'required'],
      [['NEWS_TYPE_NAME'], 'string', 'max' => 100]
    ];
  }



  function attributeLabels() {
       return [
         'NEWS_TYPE_NAME'=>'ประเภทข่าว'
       ];
   }


}


?>
