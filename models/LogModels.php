<?php
namespace app\models;
use yii;

class LogModels extends yii\db\ActiveRecord{
    public static function tableName() {
        return 'hos_log';
    }
}
