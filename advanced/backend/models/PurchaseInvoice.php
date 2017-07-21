<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "purchase_invoice".
 *
 * @property integer $id
 * @property string $bill_no
 * @property string $supplier_name
 * @property string $date
 */
class PurchaseInvoice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase_invoice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bill_no', 'supplier_name'], 'required'],
            [['date'], 'safe'],
            [['bill_no'], 'string', 'max' => 10],
            [['supplier_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bill_no' => 'Bill No',
            'supplier_name' => 'Supplier Name',
            'date' => 'Date',
        ];
    }
}
