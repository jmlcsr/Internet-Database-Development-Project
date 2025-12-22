<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HistoricalDocument */

$this->title = 'Create Historical Document';
$this->params['breadcrumbs'][] = ['label' => 'Historical Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historical-document-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
