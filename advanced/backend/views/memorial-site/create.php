<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemorialSite */

$this->title = 'Create Memorial Site';
$this->params['breadcrumbs'][] = ['label' => 'Memorial Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="memorial-site-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
