<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 * This is the Backend Dashboard for managing all database tables.
 */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '后台管理系统控制台';
?>

<style>
    .admin-card {
        background: #fff;
        border-radius: 4px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        border-top: 3px solid #d2d6de;
        transition: all 0.3s;
    }
    .admin-card:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        transform: translateY(-2px);
    }
    .card-title { font-size: 18px; font-weight: bold; margin-bottom: 15px; display: block; color: #333; }
    .card-desc { color: #777; font-size: 13px; margin-bottom: 15px; height: 40px; overflow: hidden; }
    .btn-manage { width: 100%; border-radius: 0; font-weight: bold; }
    
    /* 板块颜色区分 */
    .card-core { border-top-color: #dd4b39; }    /* 红色：史料核心 */
    .card-team { border-top-color: #00a65a; }    /* 绿色：团队数据 */
    .card-sys { border-top-color: #00c0ef; }     /* 蓝色：系统辅助 */
    
    .jumbotron { padding: 30px; background: #2c3e50; color: #fff; margin-bottom: 30px; border-radius: 4px; }
</style>

<div class="site-index">

    <div class="jumbotron text-center">
        <h1>占位符小组 · 数字化档案管理系统</h1>
        <p class="lead">铭记历史，严谨治学。请选择下方模块进行数据维护。</p>
    </div>

    <div class="body-content">

        <!-- 板块一：史料核心数据管理 -->
        <h3 style="margin-bottom: 20px;"><i class="glyphicon glyphicon-book"></i> 史料核心档案管理</h3>
        <div class="row">
            <div class="col-lg-3">
                <div class="admin-card card-core">
                    <span class="card-title">英雄志 (Hero)</span>
                    <p class="card-desc">管理抗战英烈生平事迹、军衔及影像资料。</p>
                    <?= Html::a('进入管理', ['/hero/index'], ['class' => 'btn btn-danger btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-core">
                    <span class="card-title">战役录 (Battle)</span>
                    <p class="card-desc">维护重大战役地点、时间、结果及伤亡统计数据。</p>
                    <?= Html::a('进入管理', ['/battle/index'], ['class' => 'btn btn-danger btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-core">
                    <span class="card-title">史料馆 (Document)</span>
                    <p class="card-desc">发布珍贵的历史电文、日记及档案全文内容。</p>
                    <?= Html::a('进入管理', ['/historical-document/index'], ['class' => 'btn btn-danger btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-core">
                    <span class="card-title">大事记 (Timeline)</span>
                    <p class="card-desc">编排抗战大事记时间轴节点数据。</p>
                    <?= Html::a('进入管理', ['/timeline-event/index'], ['class' => 'btn btn-danger btn-manage']) ?>
                </div>
            </div>
        </div>

        <!-- 板块二：团队与互动管理 -->
        <h3 style="margin-top: 20px; margin-bottom: 20px;"><i class="glyphicon glyphicon-user"></i> 团队与成果管理</h3>
        <div class="row">
            <div class="col-lg-3">
                <div class="admin-card card-team">
                    <span class="card-title">成员管理 (Team)</span>
                    <p class="card-desc">编辑小组成员姓名、学号及组内开发分工。</p>
                    <?= Html::a('进入管理', ['/team-member/index'], ['class' => 'btn btn-success btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-team">
                    <span class="card-title">作业索引 (Assign)</span>
                    <p class="card-desc">维护根目录 /data 文件夹下的作业文件映射。</p>
                    <?= Html::a('进入管理', ['/assignment/index'], ['class' => 'btn btn-success btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-team">
                    <span class="card-title">留言审核 (Guest)</span>
                    <p class="card-desc">审核前台访客的留言感悟，控制是否公开展示。</p>
                    <?= Html::a('进入管理', ['/guestbook/index'], ['class' => 'btn btn-success btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-team">
                    <span class="card-title">文献分类 (Cat)</span>
                    <p class="card-desc">定义史料的分类（如：电文、回忆录等）。</p>
                    <?= Html::a('进入管理', ['/document-category/index'], ['class' => 'btn btn-success btn-manage']) ?>
                </div>
            </div>
        </div>

        <!-- 板块三：系统与统计辅助 -->
        <h3 style="margin-top: 20px; margin-bottom: 20px;"><i class="glyphicon glyphicon-cog"></i> 系统辅助管理</h3>
        <div class="row">
            <div class="col-lg-3">
                <div class="admin-card card-sys">
                    <span class="card-title">遗址坐标 (Site)</span>
                    <p class="card-desc">管理全国抗战纪念馆、遗址的位置及介绍。</p>
                    <?= Html::a('进入管理', ['/memorial-site/index'], ['class' => 'btn btn-info btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-sys">
                    <span class="card-title">全局配置 (Config)</span>
                    <p class="card-desc">维护网站标题、页脚版权等静态全局参数。</p>
                    <?= Html::a('进入管理', ['/site-config/index'], ['class' => 'btn btn-info btn-manage']) ?>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="admin-card card-sys">
                    <span class="card-title">统计快照 (Stats)</span>
                    <p class="card-desc">手动更新或录入图表所需的统计快照数据。</p>
                    <?= Html::a('进入管理', ['/site-stats/index'], ['class' => 'btn btn-info btn-manage']) ?>
                </div>
            </div>
        </div>

    </div>
</div>