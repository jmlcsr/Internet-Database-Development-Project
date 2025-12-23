<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the frontend view for Battle Tactical Report 
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Battle */

$this->title = $model->name . ' - 战役详报';
$this->params['breadcrumbs'][] = ['label' => '战役录', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;


$this->registerCssFile('@web/css/style.css');
?>

<div class="battle-view container">
    <!-- 顶部标题 -->
    <div class="hero-detail-header" style="border-bottom-color: #2c3e50;">
        <h1 class="hero-name">
            <i class="glyphicon glyphicon-flag"></i> 
            <?= Html::encode($model->name) ?> 
            <small>战地详报</small>
        </h1>
    </div>

    <div class="row">
        <!-- 左侧：战役核心参数 -->
        <div class="col-md-4">
            <div class="panel panel-primary shadow-sm" style="border-color: #2c3e50;">
                <div class="panel-heading" style="background-color: #2c3e50; border-color: #2c3e50;">
                    <h3 class="panel-title">核心战情简报</h3>
                </div>
                <div class="panel-body">
                    <div class="info-label">
                        <b>发生地点：</b> <?= Html::encode($model->location) ?>
                    </div>
                    <div class="info-label">
                        <b>战役时间：</b> <?= Html::encode($model->date_period) ?>
                    </div>
                    <div class="info-label" style="border-left-color: #d9534f;">
                        <b>伤亡估算：</b> 
                        <span class="text-danger font-weight-bold">
                            <?= number_format($model->casualty_count) ?> 人
                        </span>
                    </div>
                </div>
            </div>
            
            <?= Html::a('&laquo; 返回战役录', ['index'], ['class' => 'btn btn-default btn-block', 'style' => 'margin-top: 20px;']) ?>
        </div>

        <!-- 右侧：详报正文 -->
        <div class="col-md-8">
            <div class="story-card">
                <h3 style="margin-top: 0; color: #2c3e50; border-bottom: 2px solid #eee; padding-bottom: 15px;">
                    <i class="glyphicon glyphicon-file"></i> 战役结果与历史意义
                </h3>
                <div class="content" style="font-size: 17px; letter-spacing: 1px; margin-top: 20px;">
                    <!-- 保留数据库录入时的换行格式 -->
                    <?= nl2br(Html::encode($model->result)) ?>
                </div>
            </div>
        </div>
    </div>
</div>