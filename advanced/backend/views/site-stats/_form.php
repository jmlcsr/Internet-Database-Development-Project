<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteStats */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-stats-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stat_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stat_value')->textInput() ?>

    <?= $form->field($model, 'stat_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
