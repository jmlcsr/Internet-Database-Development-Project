<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the frontend controller for Battle Records.
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Battle;       // 引入战役模型
use common\models\BattleSearch; // 引入搜索模型

class BattleController extends Controller
{
    /**
     * 战役列表页
     */
    public function actionIndex()
    {
        $searchModel = new BattleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 战役详情页
     */
    public function actionView($id)
    {
        $model = Battle::findOne($id);
        if ($model !== null) {
            return $this->render('view', [
                'model' => $model,
            ]);
        }
        throw new \yii\web\NotFoundHttpException('战役档案不存在。');
    }
}