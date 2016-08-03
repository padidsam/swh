<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hos_department".
 *
 * @property integer $ID
 * @property string $DEPARTMENT
 * @property string $DEPARTMENT_EN
 * @property string $DETAIL
 * @property string $ACTIVE
 * @property integer $USER_VIEW
 * @property string $DATE_TIME_UPDATE
 */
class DepartmentModels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hos_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DETAIL', 'ACTIVE'], 'string'],
            [['USER_VIEW'], 'integer'],
            [['DATE_TIME_UPDATE'], 'safe'],
            [['DEPARTMENT', 'DEPARTMENT_EN'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'DEPARTMENT' => 'Department',
            'DEPARTMENT_EN' => 'Department  En',
            'DETAIL' => 'Detail',
            //'ACTIVE' => 'Active',
            //'USER_VIEW' => 'User  View',
            'DATE_TIME_UPDATE' => 'Date  Time  Update',
        ];
    }
}
