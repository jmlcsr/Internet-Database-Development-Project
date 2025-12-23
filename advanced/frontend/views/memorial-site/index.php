<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the main layout for the Anti-Japanese War 80th Anniversary Project.
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
$this->title = '战地遗址 · 纪念馆';
?>
<div class="container">
    <div class="page-header">
        <h1>抗战纪念遗址 <small>铭记血染的土地</small></h1>
    </div>
    <div class="row">
        <?php foreach ($dataProvider->getModels() as $model): ?>
            <div class="col-md-4">
                <div class="panel panel-default shadow-sm" style="min-height: 220px;">
                    <div class="panel-heading" style="background: #2c3e50; color: #fff;">
                        <span class="pull-right label label-danger"><?= Html::encode($model->province) ?></span>
                        <h3 class="panel-title"><?= Html::encode($model->site_name) ?></h3>
                    </div>
                    <div class="panel-body">
                        <p class="small text-muted"><i class="glyphicon glyphicon-map-marker"></i> <?= Html::encode($model->address) ?></p>
                        <p style="font-size: 13px; color: #666;">
                            <?= mb_substr(Html::encode($model->intro), 0, 80) ?>...
                        </p>
                        <div class="text-right">
                            <?= Html::a('查看详情', ['view', 'id' => $model->id], ['class' => 'btn btn-xs btn-primary']) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>