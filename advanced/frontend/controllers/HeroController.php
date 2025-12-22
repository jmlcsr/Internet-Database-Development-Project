<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the frontend controller for Battle Records.
 */

namespace frontend\controllers; // 必须是这个，不能写错

use Yii;
use yii\web\Controller;
use common\models\Hero;       // 确保引入了模型
use common\models\HeroSearch; // 确保引入了搜索模型

class HeroController extends Controller // 类名必须和文件名 HeroController.php 一致
{
    public function actionIndex()
    {
        $searchModel = new HeroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView($id)
    {
        // 注意：这里必须引入 common\models\Hero
        $model = \common\models\Hero::findOne($id);
        
        if ($model !== null) {
            return $this->render('view', [
                'model' => $model,
            ]);
        }

        throw new \yii\web\NotFoundHttpException('该英雄档案不存在。');
    }
}