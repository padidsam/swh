<?php
namespace app\models;
use yii;

class LoadModels extends yii\db\ActiveRecord{

  public static function tableName() {
    return 'hos_download';
  }

  public function rules() {
    return [
      [['DOWNLOAD_TYPE_ID', 'DOWNLOAD_NAME','DETAIL'], 'required'],
      [['DOWNLOAD_NAME'], 'string', 'max' => 150],
      [['DETAIL'], 'string', 'max' => 5000]
    ];
  }

  function attributeLabels() {
    return [
      'DOWNLOAD_NAME'=>'หัวข้อดาวนโหลด'
    ];
  }
  
}
?>
