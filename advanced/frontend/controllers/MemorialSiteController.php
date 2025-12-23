<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the frontend controller for Memorial Sites (战地遗址).
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\MemorialSite; // 确保模型名字正确
use yii\data\ActiveDataProvider;

class MemorialSiteController extends Controller
{
    /**
     * 遗址列表页
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MemorialSite::find()->orderBy('province ASC'), // 按省份排序，方便查看
            'pagination' => [
                'pageSize' => 12,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 遗址详情展示页
     * @param integer $id
     */
    public function actionView($id)
    {
        $model = MemorialSite::findOne($id);

        if ($model !== null) {
            return $this->render('view', [
                'model' => $model,
            ]);
        }

        throw new NotFoundHttpException('该纪念遗址档案不存在。');
    }
}