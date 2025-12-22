<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 */
use yii\helpers\Html;

$this->title = '数字史料档案馆';
$this->registerCssFile('@web/css/military-style.css');
?>
<div class="historical-document-index container">
    <div class="page-header">
        <h1 style="border-left: 8px solid #2c3e50; padding-left: 15px;">史料馆 <small>抗战文献档案库</small></h1>
    </div>

    <div class="row">
        <?php foreach ($dataProvider->getModels() as $model): ?>
        <div class="col-md-12">
            <div class="panel panel-default" style="border-left: 5px solid #2c3e50; margin-bottom: 20px;">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 style="font-weight: bold; color: #2c3e50;">
                                <span class="label label-primary"><?= Html::encode($model->period) ?></span>
                                <?= Html::encode($model->title) ?>
                            </h4>
                            <p class="text-muted small">
                                <b>来源：</b><?= Html::encode($model->source) ?> | 
                                <b>分类：</b><?= Html::encode($model->category->category_name ?? '未分类') ?>
                            </p>
                            <p style="color: #666;">
                                <?= mb_substr(strip_tags($model->content), 0, 180) ?>...
                            </p>
                        </div>
                        <div class="col-md-2 text-right" style="padding-top: 20px;">
                            <?= Html::a('阅读全文 &raquo;', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>