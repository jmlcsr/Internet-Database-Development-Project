@echo off
:: 设置字符集为UTF-8防止乱码（或者手动另存为ANSI编码）
chcp 65001 > nul
title 占位符小组 - 全线启动

echo ======================================================
echo           正在启动 抗战胜利80周年 · 数字档案馆
echo ======================================================

:: 1. 启动前台
start "Yii2-Frontend" cmd /c "cd advanced && php yii serve --docroot=frontend/web --port=8080"
echo 前台门户已在 8080 端口启动...

:: 2. 启动后台
start "Yii2-Backend" cmd /c "cd advanced && php yii serve --docroot=backend/web --port=8081"
echo 后台管理已在 8081 端口启动...

echo.
echo 正在等待服务就绪，即将打开浏览器...
timeout /t 3 /nobreak > nul

:: 3. 自动打开网页
start http://localhost:8080
start http://localhost:8081/index.php?r=site/index

echo 启动成功！
echo ======================================================
pause