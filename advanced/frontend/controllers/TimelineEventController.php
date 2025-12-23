<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383, 
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\TimelineEvent;
use yii\data\ActiveDataProvider;

class TimelineEventController extends Controller
{
    /**
     * 显示抗战大事记时间轴
     */
    public function actionIndex()
    {
        // 创建数据提供器，按年份从小到大排序
        $dataProvider = new ActiveDataProvider([
            'query' => TimelineEvent::find()->orderBy('event_year ASC'),
            'pagination' => [
                'pageSize' => 20, // 时间轴通常一次性展示较多
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = TimelineEvent::findOne($id);
        if ($model !== null) {
            return $this->render('view', [
                'model' => $model,
            ]);
        }
        throw new \yii\web\NotFoundHttpException('该事件不存在。');
    }
}