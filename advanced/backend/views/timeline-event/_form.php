<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TimelineEvent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timeline-event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_year')->textInput() ?>

    <?= $form->field($model, 'event_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
