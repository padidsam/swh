<?php
namespace app\models;
use yii;

class BoardansModels extends yii\db\ActiveRecord{
    public static function tableName() {
        return 'hos_board_ans';
    }

  public function rules() {
        return [
            [['DETAIL'], 'required'],
            [['DETAIL'], 'string', 'max' => 5000]
        ];
    }

    function attributeLabels() {
        return [
            'DETAIL'=>'รายละเอียด'
        ];
    }
}

?>
