<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dealers".
 *
 * @property string $role
 * @property string $name
 * @property string $mobile_No_1
 * @property string $mobile_No_2
 * @property string $landLineNo
 * @property string $email
 * @property string $nicNo
 * @property string $refferedBy
 * @property string $notes
 * @property string $address
 * @property integer $dealer_Id
 */
class Dealers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dealers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'name', 'mobile_No_1', 'mobile_No_2', 'landLineNo', 'email', 'nicNo', 'refferedBy', 'notes', 'address'], 'required'],
            [['role', 'mobile_No_1', 'mobile_No_2', 'landLineNo'], 'string', 'max' => 15],
            [['name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['nicNo'], 'string', 'max' => 20],
            [['refferedBy'], 'string', 'max' => 60],
            [['notes'], 'string', 'max' => 500],
            [['address'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role' => 'Role',
            'name' => 'Name',
            'mobile_No_1' => 'Mobile  No 1',
            'mobile_No_2' => 'Mobile  No 2',
            'landLineNo' => 'Land Line No',
            'email' => 'Email',
            'nicNo' => 'Nic No',
            'refferedBy' => 'Reffered By',
            'notes' => 'Notes',
            'address' => 'Address',
            'dealer_Id' => 'Dealer  ID',
        ];
    }
}
