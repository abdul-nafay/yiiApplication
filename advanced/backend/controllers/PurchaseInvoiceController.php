<?php

namespace backend\controllers;

use Yii;
use backend\models\PurchaseInvoice;
use backend\models\PurchaseInvoiceSearch;
use backend\models\Inventory;
use backend\models\Model;

use backend\controllers\InventoryController;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PurchaseInvoiceController implements the CRUD actions for PurchaseInvoice model.
 */
class PurchaseInvoiceController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PurchaseInvoice models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PurchaseInvoiceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PurchaseInvoice model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PurchaseInvoice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PurchaseInvoice();
        $modelsInventory = [new Inventory];

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {

            $modelsInventory = Model::createMultiple(Inventory::classname());
            Model::loadMultiple($modelsInventory, Yii::$app->request->post());

            
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsInventory) && $valid;
            
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsInventory as $modelsInventory) {
                            $modelsInventory->purchase_invoice_id = $model->id;
                            if (! ($flag = $modelsInventory->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }



        
        } 
        else {
            return $this->render('create', [
                'model' => $model,
                'modelsInventory' => (empty($modelsInventory)) ? [new Inventory] : $modelsInventory

            ]);
        }
    }

    /**
     * Updates an existing PurchaseInvoice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PurchaseInvoice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PurchaseInvoice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PurchaseInvoice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PurchaseInvoice::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
