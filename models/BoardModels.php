<?php
namespace app\models;
use yii;

class BoardModels extends yii\db\ActiveRecord{
  public static function tableName() {
    return 'hos_board';
  }

  public function rules() {
    return [
      [['BOARD_TITLE', 'BOARD_DETAIL'], 'required'],
      [['BOARD_TITLE'], 'string', 'max' => 200],
      [['BOARD_DETAIL'], 'string', 'max' => 5000]
    ];
  }

  function attributeLabels() {
    return [
      'BOARD_TITLE'=>'หัวข้อบทความ',
      'BOARD_DETAIL'=>'รายละเอียด'
    ];
  }

}
?>
