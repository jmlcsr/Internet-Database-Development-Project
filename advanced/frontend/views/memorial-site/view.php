<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383, 20251221
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemorialSite */

$this->title = $model->site_name . ' - 战地遗址';
$this->params['breadcrumbs'][] = ['label' => '战地遗址', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->site_name;

// 注册之前定义的军事风格 CSS
$this->registerCssFile('@web/css/style.css');
?>

<div class="memorial-site-view container">
    <div class="hero-detail-header">
        <h1 class="hero-name">
            <i class="glyphicon glyphicon-map-marker" style="color: #e74c3c;"></i> 
            <?= Html::encode($model->site_name) ?>
        </h1>
    </div>

    <div class="row">
        <!-- 左侧：位置信息卡片 -->
        <div class="col-md-4">
            <div class="panel panel-info shadow-sm">
                <div class="panel-heading">地理位置信息</div>
                <div class="panel-body">
                    <p><strong>所属省份：</strong> <span class="label label-danger"><?= Html::encode($model->province) ?></span></p>
                    <p><strong>详细地址：</strong><br><?= Html::encode($model->address) ?></p>
                </div>
            </div>
            
            <div class="well">
                <p class="small text-muted">温馨提示：为了更好地了解历史，建议您在开馆时间内前往参观，缅怀先烈。</p>
            </div>
            
            <?= Html::a('&laquo; 返回列表', ['index'], ['class' => 'btn btn-default btn-block']) ?>
        </div>

        <!-- 右侧：详细介绍内容 -->
        <div class="col-md-8">
            <div class="story-card">
                <h3 style="margin-top: 0; color: #2c3e50; border-bottom: 2px solid #eee; padding-bottom: 15px;">
                    <i class="glyphicon glyphicon-info-sign"></i> 遗址/纪念馆介绍
                </h3>
                <div class="content" style="font-size: 16px; line-height: 2;">
                    <?= nl2br(Html::encode($model->intro)) ?>
                </div>
            </div>
        </div>
    </div>
</div>