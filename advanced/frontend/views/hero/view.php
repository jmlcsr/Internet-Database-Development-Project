<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 */

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Hero */

$this->registerCssFile('@web/css/style.css', ['depends' => [\yii\bootstrap\BootstrapAsset::class]]);

$this->title = $model->name . ' - 英雄志';
$this->params['breadcrumbs'][] = ['label' => '英雄榜', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
?>

<div class="hero-view container">
    <div class="hero-detail-header">
        <h1 class="hero-name"><?= Html::encode($model->name) ?> <small>抗战英雄档案</small></h1>
    </div>

    <div class="row">
        <!-- 左侧：照片与核心信息 -->
        <div class="col-md-4">
            <div class="thumbnail shadow-sm">
                <?php if($model->image_url): ?>
                    <?= Html::img(Yii::$app->request->baseUrl . '/' . $model->image_url, ['style' => 'width:100%; border-radius: 4px;']) ?>
                <?php else: ?>
                    <div style="height: 300px; background: #eee; text-align: center; line-height: 300px; color: #999;">暂无影像资料</div>
                <?php endif; ?>
                
                <div class="caption">
                    <div class="info-label">
                        <b>生卒：</b> <?= Html::encode($model->lifetime) ?>
                    </div>
                    <div class="info-label">
                        <b>职级：</b> <?= Html::encode($model->rank) ?>
                    </div>
                </div>
            </div>
            <?= Html::a('&laquo; 返回英雄榜', ['index'], ['class' => 'btn btn-default btn-block btn-back']) ?>
        </div>

        <!-- 右侧：英雄事迹全文 -->
        <div class="col-md-8">
            <div class="story-card">
                <h3 style="margin-top: 0; color: #e74c3c; border-bottom: 1px dashed #ddd; padding-bottom: 15px;">
                    <i class="glyphicon glyphicon-book"></i> 英勇事迹纪实
                </h3>
                <div class="content">
                    <?= nl2br(Html::encode($model->description)) ?>
                </div>
            </div>
        </div>
    </div>
</div>