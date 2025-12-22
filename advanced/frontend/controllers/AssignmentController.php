<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the frontend controller for Assignment indexing and downloading.
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\Assignment; // 确保模型名字正确
use yii\data\ActiveDataProvider;

class AssignmentController extends Controller
{
    /**
     * 作业索引列表页
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Assignment::find()->orderBy('file_type DESC'), // 团队作业排在前面
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 安全下载逻辑
     * @param integer $id 数据库中的作业ID
     */
    public function actionDownload($id)
    {
        $model = Assignment::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('该作业记录不存在。');
        }

        // 根据数据库中的 file_type (team/personal) 拼接物理路径
        // @frontend 为 advanced/frontend，退一级进入根目录的 data
        $filePath = Yii::getAlias('@frontend') . "/../data/{$model->file_type}/{$model->file_name}";

        if (file_exists($filePath)) {
            // Yii2 核心下载方法：自动处理 Header 并不暴露真实路径
            return Yii::$app->response->sendFile($filePath);
        } else {
            throw new NotFoundHttpException("磁盘上找不到物理文件：{$model->file_name}");
        }
    }
}