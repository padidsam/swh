<?php
namespace app\models;
use yii;

class NewsModels extends yii\db\ActiveRecord{
  public static function tableName() {
    return 'hos_news';
  }

  public function rules() {
   return [
       [['NEWS_S', 'NEWS_HEAD','IMAGE_DESC','NEWS_TYPE_ID','NEWS_HEAD_DETAIL'], 'required'],
       [['NEWS_S'], 'string', 'max' => 50],
       [['NEWS_HEAD'], 'string', 'max' => 200],
       [['NEWS_HEAD_DETAIL'], 'string', 'max' => 5000]
   ];
}



  function attributeLabels() {
       return [
         'NEWS_HEAD'=>'หัวข้อข่าว'
       ];
   }


}


?>
