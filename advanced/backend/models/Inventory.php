<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id
 * @property string $product_name
 * @property integer $quantity
 * @property integer $price
 * @property integer $purchase_invoice_id
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'quantity', 'price'], 'required'],
            [['quantity', 'price', 'purchase_invoice_id'], 'integer'],
            [['product_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'quantity' => 'Quantity',
            'price' => 'Price',
            'purchase_invoice_id' => 'Purchase Invoice ID',
        ];
    }
}
