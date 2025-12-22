<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383,
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Guestbook;
use yii\data\ActiveDataProvider;

class GuestbookController extends Controller
{
    public function actionIndex()
    {
        $model = new Guestbook();

        // 处理留言提交
        if ($model->load(Yii::$app->request->post())) {
            $model->is_audit = 0; // 新留言默认不审核通过，需后台审核
            if ($model->save()) {
                Yii::$app->session->setFlash('success', '感悟提交成功，请等待档案管理员审核。');
                return $this->refresh(); // 刷新页面清空表单
            }
        }

        // 获取已审核通过的留言
        $dataProvider = new ActiveDataProvider([
            'query' => Guestbook::find()->where(['is_audit' => 1])->orderBy('created_at DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
}