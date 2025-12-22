<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '抗战英雄志';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hero-index container">
    <div class="page-header">
        <h1 style="border-left: 8px solid #e74c3c; padding-left: 15px;">抗战英雄志 <small>不朽勋章</small></h1>
    </div>

    <div class="row">
        <?php foreach ($dataProvider->getModels() as $model): ?>
        <div class="col-md-4">
            <div class="panel panel-default shadow-sm" style="border-top: 3px solid #e74c3c;">
                <div class="panel-body text-center">
                    <!-- 头像/照片 -->
                    <div style="width: 120px; height: 150px; background: #eee; margin: 0 auto 15px; border: 2px solid #ddd;">
                        <?php if($model->image_url): ?>
                            <img src="<?= Url::to($model->image_url) ?>" style="width:100%; height:100%; object-fit:cover;">
                        <?php else: ?>
                            <div style="line-height: 150px; color: #999;">暂无影像</div>
                        <?php endif; ?>
                    </div>
                    
                    <h3 class="text-danger" style="margin-top: 0;"><?= Html::encode($model->name) ?></h3>
                    <p class="text-muted small"><strong>生卒：</strong><?= Html::encode($model->lifetime) ?></p>
                    <p class="text-muted small"><strong>职级：</strong><?= Html::encode($model->rank) ?></p>
                    <hr>
                    <p style="height: 60px; overflow: hidden; font-size: 13px;">
                        <?= mb_substr(Html::encode($model->description), 0, 80) ?>...
                    </p>
                    <?= Html::a('查阅生平详情', ['view', 'id' => $model->id], ['class' => 'btn btn-danger btn-block btn-sm']) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>