<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiteStats */

$this->title = 'Create Site Stats';
$this->params['breadcrumbs'][] = ['label' => 'Site Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-stats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
