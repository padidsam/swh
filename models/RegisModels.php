<?php
namespace app\models;
use yii;

class RegisModels extends yii\db\ActiveRecord{
  public static function tableName() {
    return 'hos_user';
  }

  public function rules() {
    return [
      [['USERNAME', 'PASSWORD','FULLNAME','PHONE','EMAIL'], 'required'],
      [['USERNAME'], 'string', 'max' => 50],
      [['PASSWORD'], 'string', 'max' => 50],
      [['FULLNAME'], 'string', 'max' => 100],
      [['PHONE'], 'string', 'max' => 100],
      [['EMAIL'], 'string', 'max' => 100]
    ];
  }

}


?>
