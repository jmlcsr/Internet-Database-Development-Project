<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the frontend controller for Historical Documents (史料馆).
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\HistoricalDocument;
use common\models\HistoricalDocumentSearch;

class HistoricalDocumentController extends Controller
{
    /**
     * 史料列表页
     */
    public function actionIndex()
    {
        $searchModel = new HistoricalDocumentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 史料全文阅读页
     */
    public function actionView($id)
    {
        $model = HistoricalDocument::findOne($id);

        if ($model !== null) {
            return $this->render('view', [
                'model' => $model,
            ]);
        }

        throw new NotFoundHttpException('该史料档案不存在。');
    }

    
}