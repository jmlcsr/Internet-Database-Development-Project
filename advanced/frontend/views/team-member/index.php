<?php
/**
 * Team: 占位符小组, NKU
 * Coding by: 张得涵 2311383
 */
use yii\helpers\Html;

$this->title = '占位符小组 · 团队主页';
?>

<style>
    .team-header { background: #2c3e50; color: white; padding: 60px 0; margin-top: -20px; margin-bottom: 40px; border-bottom: 5px solid #e74c3c; }
    .member-card { border: none; border-radius: 10px; background: #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin-bottom: 30px; transition: 0.3s; }
    .member-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(231, 76, 60, 0.3); }
    .member-card .card-header { background: #e74c3c; color: #fff; padding: 15px; border-radius: 10px 10px 0 0; text-align: center; }
    .member-card .card-body { padding: 20px; text-align: center; }
    .student-id { color: #7f8c8d; font-size: 0.9em; font-weight: bold; }
    .work-tag { background: #f8f9fa; border-radius: 5px; padding: 10px; margin-top: 10px; font-size: 0.9em; color: #34495e; border-left: 3px solid #e74c3c; }
    .download-section { background: #fff; padding: 30px; border-radius: 10px; border: 1px solid #eee; }
</style>

<div class="team-member-index">
    <div class="team-header text-center">
        <div class="container">
            <h1 class="display-3" style="font-weight: 800;">占位符小组</h1>
            <p class="lead">铭记历史，码出未来 | NKU DBIS 课程成果展示</p>
        </div>
    </div>

    <div class="container">
        <!-- 成员展示区保持逻辑 -->
        <h2 class="text-center" style="margin-bottom: 40px; font-weight: bold;">
            <span style="border-bottom: 3px solid #e74c3c;">战斗序列 · 成员简介</span>
        </h2>
        
        <div class="row">
            <?php if (!empty($members)): ?>
                <?php foreach ($members as $member): ?>
                    <div class="col-md-4">
                        <div class="member-card">
                            <div class="card-header">
                                <h3 style="margin: 0;"><?= Html::encode($member->name) ?></h3>
                            </div>
                            <div class="card-body">
                                <p class="student-id">学号：<?= Html::encode($member->student_id) ?></p>
                                <div class="work-tag">
                                    <strong>负责模块：</strong><br>
                                    <?= nl2br(Html::encode($member->division)) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-md-12 text-center text-muted">暂无成员数据，请在后台录入。</div>
            <?php endif; ?>
        </div>

        <br><br>

        <!-- 修改后的作业下载区：从数据库读取 -->
        <div class="download-section shadow-sm">
            <h3 style="border-left: 5px solid #2c3e50; padding-left: 15px; margin-bottom: 25px;">
                <i class="glyphicon glyphicon-folder-open"></i> 战地档案 · 作业成果下载
            </h3>
            
            <div class="row">
                <?php if (!empty($assignments)): ?>
                    <?php foreach ($assignments as $assign): ?>
                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <div style="background: #fdfdfd; padding: 15px; border: 1px solid #f1f1f1; display: flex; justify-content: space-between; align-items: center;">
                                <div>
                                    <!-- 显示作业类别标签 -->
                                    <?php if ($assign->file_type == 'team'): ?>
                                        <span class="label label-danger">小组</span>
                                    <?php else: ?>
                                        <span class="label label-primary">个人</span>
                                    <?php endif; ?>
                                    &nbsp;
                                    <!-- 显示数据库里的 Title，而不是文件名 -->
                                    <span style="font-weight: bold; color: #2c3e50;">
                                        <?= Html::encode($assign->title) ?>
                                    </span>
                                    <br>
                                    <small class="text-muted">提交人：<?= Html::encode($assign->author) ?></small>
                                </div>
                                <!-- 链接传参数 ID -->
                                <?= Html::a('立即调阅', ['download', 'id' => $assign->id], ['class' => 'btn btn-danger btn-sm']) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-md-12">
                        <div class="alert alert-info">数据库中暂无作业记录。请在后台“作业索引”模块录入。</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>