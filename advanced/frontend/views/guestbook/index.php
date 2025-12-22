<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383, 20251221
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

$this->title = '互动感悟留言板';
$this->params['breadcrumbs'][] = $this->title;

// 使用我们之前定义的军事风 CSS
$this->registerCssFile('@web/css/military-style.css');
?>

<div class="guestbook-index container">
    <div class="hero-detail-header">
        <h1 class="hero-name"><i class="glyphicon glyphicon-edit"></i> 历史感悟 <small>写给 80 年后的回响</small></h1>
    </div>

    <div class="row">
        <!-- 左侧：留言展示 -->
        <div class="col-md-8">
            <h3 class="section-title">访客感悟墙</h3>
            <?php 
            $messages = $dataProvider->getModels();
            if (!empty($messages)): 
                foreach ($messages as $msg): 
            ?>
                <div class="story-card" style="margin-bottom: 20px; padding: 20px; border-left: 5px solid #e74c3c;">
                    <p style="font-size: 16px; color: #2c3e50; font-style: italic;">
                        "<?= Html::encode($msg->content) ?>"
                    </p>
                    <div class="text-right text-muted" style="font-size: 12px; margin-top: 10px;">
                        <strong><i class="glyphicon glyphicon-user"></i> <?= Html::encode($msg->nickname) ?></strong> 
                        &nbsp; | &nbsp; 
                        <i class="glyphicon glyphicon-time"></i> <?= $msg->created_at ?>
                    </div>
                </div>
            <?php 
                endforeach;
                echo LinkPager::widget(['pagination' => $dataProvider->pagination]);
            else: 
            ?>
                <div class="well text-center text-muted">目前尚无审核通过的感悟，欢迎留下您的第一条心声。</div>
            <?php endif; ?>
        </div>

        <!-- 右侧：提交表单 -->
        <div class="col-md-4">
            <div class="panel panel-danger shadow-sm">
                <div class="panel-heading" style="background-color: #e74c3c; border-color: #e74c3c;">
                    <h3 class="panel-title">留下您的感悟</h3>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(); ?>
                        
                        <?= $form->field($model, 'nickname')->textInput([
                            'maxlength' => true, 
                            'placeholder' => '请输入您的昵称'
                        ])->label('访客名') ?>

                        <?= $form->field($model, 'content')->textarea([
                            'rows' => 6, 
                            'placeholder' => '在此写下您对抗战胜利80周年的感悟...'
                        ])->label('感悟内容') ?>

                        <div class="form-group">
                            <?= Html::submitButton('提交至档案馆', ['class' => 'btn btn-danger btn-block']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                    <p class="small text-muted text-center" style="margin-top: 10px;">
                        * 提交后需经后台管理员审核方可显示
                    </p>
                </div>
            </div>
            
            <div class="alert alert-info">
                <strong><i class="glyphicon glyphicon-info-sign"></i> 提示：</strong><br>
                铭记历史，是为了更好地走向未来。请文明留言，共同守护精神家园。
            </div>
        </div>
    </div>
</div>