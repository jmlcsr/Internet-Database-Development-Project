<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the main layout for the Anti-Japanese War 80th Anniversary Project.
 * Features: Dynamic site configuration and military-style UI.
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\SiteConfig; // 引入配置模型

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        /* 全局军事风格微调 */
        body { 
            font-family: "Microsoft YaHei", "Source Sans Pro", sans-serif; 
            background-color: #f4f4f4; 
            padding-top: 80px; /* 解决导航栏固定导致的遮挡问题 */
        }
        .navbar-inverse { 
            background-color: #2c3e50; 
            border: none; 
            border-bottom: 3px solid #e74c3c; 
        }
        .navbar-inverse .navbar-brand { 
            color: #e74c3c !important; 
            font-weight: bold; 
            font-size: 22px; 
        }
        .navbar-inverse .navbar-nav > li > a { 
            color: #ecf0f1 !important; 
            transition: 0.3s;
        }
        .navbar-inverse .navbar-nav > li > a:hover { 
            background-color: #e74c3c !important; 
        }
        .footer { 
            background: #1a252f; 
            color: #95a5a6; 
            padding: 50px 0; 
            margin-top: 50px; 
            border-top: 5px solid #e74c3c; 
        }
        .footer h5 { color: #fff; margin-bottom: 20px; font-weight: bold; }
        .footer a { color: #3498db; text-decoration: none; }
        .footer a:hover { color: #e74c3c; }
        .footer hr { border-top: 1px solid #34495e; }
        .wrap > .container-fluid { padding: 20px 30px; }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        // 使用 SiteConfig 数据库动态读取网站名称
        'brandLabel' => SiteConfig::get('site_name'), 
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    // 全导航栏入口串联
    $menuItems = [
        ['label' => '首页', 'url' => ['/site/index']],
        ['label' => '英雄榜', 'url' => ['/hero/index']],
        ['label' => '史料馆', 'url' => ['/historical-document/index']],
        ['label' => '战役录', 'url' => ['/battle/index']],
        ['label' => '光辉历程', 'url' => ['/timeline-event/index']], 
        ['label' => '战地遗址', 'url' => ['/memorial-site/index']],
        ['label' => '留言板', 'url' => ['/guestbook/index']],
        ['label' => '小组主页', 'url' => ['/team-member/index']],
    ];

    if (Yii::$app->user->isGuest) {
        // 游客状态显示后台管理入口（跳转登录）
        $menuItems[] = ['label' => '管理后台', 'url' => ['/site/login']];
    } else {
        // 已登录显示用户名和退出按钮
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '退出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout', 'style' => 'color:#ecf0f1; padding-top:15px; text-decoration:none;']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <h5>项目愿景</h5>
                <p class="small text-justify">铭记烈士功勋，传承抗战精神。本站作为南开大学数据库信息系统课程成果，致力于利用数字技术还原真实历史档案，为抗战胜利80周年献礼。</p>
            </div>
            <div class="col-md-4">
                <h5>学术支持</h5>
                <ul class="list-unstyled small">
                    <li><?= Html::a('南开大学 (Nankai University)', 'https://www.nankai.edu.cn') ?></li>
                    <li><?= Html::a('数据库与信息系统研究室 (DBIS)', 'http://dbis.nankai.edu.cn') ?></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>团队与规范</h5>
                <p class="small">
                    <strong>Team: 占位符小组</strong><br>
                    作业规范路径: <code>/data/team/</code><br>
                    数据库规模: 12张数据表 (已达标)
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 text-left">
                <!-- 使用 SiteConfig 数据库动态读取版权信息 -->
                <p>&copy; <?= SiteConfig::get('copyright') ?> <?= date('Y') ?></p>
            </div>
            <div class="col-md-6 text-right">
                <p>NKU 数据库信息系统课程大作业 · 占位符小组</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>