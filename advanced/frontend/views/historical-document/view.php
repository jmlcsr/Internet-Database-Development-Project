<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HistoricalDocument */

$this->title = $model->title;
$this->registerCssFile('@web/css/style.css');
?>
<div class="document-view container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div style="background: #fff; padding: 50px; box-shadow: 0 0 20px rgba(0,0,0,0.1); border: 1px solid #ddd;">
                <!-- 文章头部 -->
                <div class="text-center" style="margin-bottom: 40px; border-bottom: 2px solid #eee; padding-bottom: 30px;">
                    <h1 style="font-weight: bold; color: #2c3e50;"><?= Html::encode($model->title) ?></h1>
                    <p class="text-muted" style="margin-top: 20px;">
                        <span>文献时期：<?= Html::encode($model->period) ?></span> &nbsp; | &nbsp;
                        <span>史料来源：<?= Html::encode($model->source) ?></span>
                    </p>
                </div>

                <!-- 文章正文（阅读体验优化） -->
                <div class="document-content" style="font-size: 18px; line-height: 2.2; color: #2c3e50; text-align: justify; letter-spacing: 0.5px;">
                    <?= nl2br(Html::encode($model->content)) ?>
                </div>

                <hr style="margin-top: 50px;">
                <div class="text-center">
                    <?= Html::a('返回史料馆列表', ['index'], ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>