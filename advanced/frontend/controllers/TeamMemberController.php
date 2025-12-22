<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383,
 * This is the frontend controller for Team "Placeholder".
 */

namespace frontend\controllers;

use Yii;
use yii\web\controller;
use yii\web\NotFoundHttpException;
use common\models\TeamMember; // 确保模型名字正确

class TeamMemberController extends Controller
{
    public function actionIndex()
    {
        // 1. 从数据库读取组员
        $members = \common\models\TeamMember::find()->all();

        // 2. 从数据库读取所有作业
        $assignments = \common\models\Assignment::find()->orderBy('file_type DESC')->all();

        // 3. 将两个变量都传给视图
        return $this->render('index', [
            'members' => $members,
            'assignments' => $assignments, // 确保这个变量名和视图里 foreach 的一致
        ]);
    
    }

    /**
     * 作业下载逻辑
     */
    public function actionDownload($name)
    {
        $name = basename($name);
        $path = Yii::getAlias('@frontend') . '/../data/team/' . $name;

        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        }
        throw new NotFoundHttpException("文件未找到。");
    }
}