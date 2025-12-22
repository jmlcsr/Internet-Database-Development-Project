<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteStatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Stats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-stats-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Site Stats', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'stat_name',
            'stat_value',
            'stat_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
