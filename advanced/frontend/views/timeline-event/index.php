<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the main layout for the Anti-Japanese War 80th Anniversary Project.
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
$this->title = '光辉历程 · 大事记';
$this->registerCssFile('@web/css/military-style.css');
?>
<div class="container">
    <div class="page-header">
        <h1>抗战光辉历程 <small>1931 - 1945</small></h1>
    </div>
    <div class="timeline-list">
        <?php foreach ($dataProvider->getModels() as $model): ?>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-2 text-right">
                    <h3 class="text-danger" style="margin-top: 0; font-weight: bold;">
                        <?= $model->event_year ?>
                    </h3>
                    <span class="label label-default"><?= Html::encode($model->event_date) ?></span>
                </div>
                <div class="col-md-10" style="border-left: 3px solid #2c3e50; padding-left: 30px;">
                    <h4 style="font-weight: bold;"><?= Html::encode($model->title) ?></h4>
                    <p class="text-muted" style="line-height: 1.8;">
                        <?= nl2br(Html::encode($model->content)) ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>