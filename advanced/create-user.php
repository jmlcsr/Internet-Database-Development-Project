<?php
/**
 * 临时创建管理员
 * 执行：php create_user.php
 */
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/common/config/bootstrap.php';
require __DIR__ . '/console/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/common/config/main.php',
    require __DIR__ . '/common/config/main-local.php',
    require __DIR__ . '/console/config/main.php',
    require __DIR__ . '/console/config/main-local.php'
);

$app = new yii\console\Application($config);
/* @var $user common\models\User */
$user           = new \common\models\User();
$user->username = 'VignaChu';
$user->email    = '1113820920@qq.com';
$user->setPassword('114514');
$user->generateAuthKey();
$user->status   = \common\models\User::STATUS_ACTIVE;
if ($user->save()) {
    echo "管理员已创建：admin / 123456\n";
} else {
    echo "保存失败：\n";
    print_r($user->errors);
}