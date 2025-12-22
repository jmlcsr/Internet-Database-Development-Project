<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383, 20251221
 * This is the main homepage view with dynamic Chart.js integration.
 */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '抗战胜利80周年纪念网';

// 注册 Chart.js 库
$this->registerJsFile('https://cdn.staticfile.org/Chart.js/3.9.1/chart.min.js', ['position' => \yii\web\View::POS_HEAD]);
?>

<style>
    /* 首页大横幅 - 使用你指定的本地图片路径 */
    .hero-banner {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                    url('<?= Yii::$app->request->baseUrl ?>/pic/main_background.jpg');
        background-size: cover;
        background-position: center;
        height: 550px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-top: -20px; /* 抵消 container 的边距 */
    }
    .hero-banner h1 { font-size: 60px; font-weight: 800; letter-spacing: 5px; text-shadow: 2px 2px 10px #000; }
    
    .feature-section { padding: 60px 0; background: #fff; }
    .stat-card {
        border: 1px solid #eee;
        border-radius: 10px;
        padding: 40px 20px;
        background: #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s;
        margin-bottom: 20px;
    }
    .stat-card:hover { transform: translateY(-10px); box-shadow: 0 10px 25px rgba(231, 76, 60, 0.2); }
    .stat-card i { font-size: 50px; color: #e74c3c; margin-bottom: 20px; display: block; }
    
    .section-title { 
        text-align: center; 
        font-weight: bold; 
        margin-bottom: 50px; 
        position: relative;
        padding-bottom: 15px;
    }
    .section-title:after {
        content: "";
        width: 60px;
        height: 4px;
        background: #e74c3c;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -30px;
    }
</style>

<div class="site-index">

    <!-- 1. 顶部视觉 Banner -->
    <div class="hero-banner">
        <div class="container">
            <h1><?= \common\models\SiteConfig::get('home_slogan') ?></h1>
            <p style="font-size: 24px; margin: 20px 0 40px;">纪念中国人民抗日战争胜利 80 周年</p>
            <p>
                <?= Html::a('浏览数字档案馆', ['/historical-document/index'], ['class' => 'btn btn-lg btn-danger', 'style' => 'padding: 15px 40px; font-size: 20px;']) ?>
            </p>
        </div>
    </div>

    <!-- 2. 核心板块预览 -->
    <div class="feature-section">
        <div class="container">
            <h2 class="section-title">核心史料库</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="stat-card">
                        <i class="glyphicon glyphicon-user"></i>
                        <h4>抗战英雄志</h4>
                        <p class="text-muted">追寻多位抗战将领与无名英雄的战斗足迹。</p>
                        <?= Html::a('进入榜单', ['/hero/index'], ['class' => 'btn btn-default']) ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <i class="glyphicon glyphicon-screenshot"></i>
                        <h4>重大战役录</h4>
                        <p class="text-muted">详实记录从卢沟桥事变到受降仪式的若干核心战役。</p>
                        <?= Html::a('查看详情', ['/battle/index'], ['class' => 'btn btn-default']) ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <i class="glyphicon glyphicon-book"></i>
                        <h4>文献档案馆</h4>
                        <p class="text-muted">数字化收录官方电文、战地日记等珍贵第一手史料。</p>
                        <?= Html::a('查阅史实', ['/historical-document/index'], ['class' => 'btn btn-default']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. 数据可视化区域 (动态图表实现) -->
    <div class="container" style="margin-top: 50px; margin-bottom: 80px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default shadow-sm">
                    <div class="panel-heading bg-white">
                        <strong><i class="glyphicon glyphicon-stats"></i> 主要战役烈士及伤亡分布统计</strong>
                    </div>
                    <div class="panel-body">
                        <!-- 图表画布 -->
                        <canvas id="battleChart" style="width: 100%; height: 400px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
// 编写图表初始化 JS
$js = <<<JS
    var ctx = document.getElementById('battleChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: $battleLabels, // 由 Controller 传来的战役名称
            datasets: [{
                label: '伤亡人数估算',
                data: $battleData, // 由 Controller 传来的数据
                backgroundColor: 'rgba(231, 76, 60, 0.7)',
                borderColor: 'rgba(231, 76, 60, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: '人数' }
                }
            }
        }
    });
JS;
// 注册该 JS 到页面底部
$this->registerJs($js);
?>