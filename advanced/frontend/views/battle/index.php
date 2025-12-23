<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 */
use yii\helpers\Html;

$this->title = '重大战役录';
?>
<div class="battle-index container">
    <h2 class="section-title" style="margin: 30px 0;">重大战役全记录</h2>
    
    <div class="row">
        <?php foreach ($dataProvider->getModels() as $model): ?>
        <div class="col-md-6">
            <div class="well shadow-sm" style="background: #fff; border-left: 5px solid #e74c3c;">
                <h3 style="margin-top: 0;"><?= Html::encode($model->name) ?></h3>
                <p><strong>发生地点：</strong><span class="text-primary"><?= Html::encode($model->location) ?></span></p>
                <p><strong>战役时间：</strong><?= Html::encode($model->date_period) ?></p>
                <p><strong>战役结果：</strong><?= mb_substr(Html::encode($model->result), 0, 100) ?>...</p>
                <div class="text-right">
                    <?= Html::a('查看战术详报 &raquo;', ['view', 'id' => $model->id], ['class' => 'text-danger']) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>