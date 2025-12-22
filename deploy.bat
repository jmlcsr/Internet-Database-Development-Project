@echo off
chcp 65001 > nul
title 占位符小组 - 项目自动化部署工具

echo ======================================================
echo           占位符小组 · 抗战胜利80周年项目部署
echo ======================================================

:: 1. 引导环境配置
set /p db_pass=请输入您的 MySQL root 密码 (若无密码请直接回车): 
set db_port=3306
set db_name=yii

echo.
echo [1/4] 正在初始化 Yii2 环境...
cd advanced
:: 自动执行 init，选开发模式，强制覆盖旧配置
echo 0 | php init --overwrite=All --env=Development
cd ..

echo.
echo [2/4] 正在配置数据库连接文件...
:: 【核心逻辑】直接生成 common/config/main-local.php 文件
(
echo ^<?php
echo return [
echo     'components' =^> [
echo         'db' =^> [
echo             'class' =^> 'yii\db\Connection',
echo             'dsn' =^> 'mysql:host=localhost;port=%db_port%;dbname=%db_name%',
echo             'username' =^> 'root',
echo             'password' =^> '%db_pass%',
echo             'charset' =^> 'utf8mb4',
echo         ],
echo         'mailer' =^> [
echo             'class' =^> 'yii\swiftmailer\Mailer',
echo             'viewPath' =^> '@common/mail',
echo             'useFileTransport' =^> true,
echo         ],
echo     ],
echo ];
) > advanced/common/config/main-local.php

echo [OK] main-local.php 已根据您的密码自动配置完成。

echo.
echo [3/4] 正在准备数据库...
mysql -h localhost -P %db_port% -u root -p%db_pass% -e "CREATE DATABASE IF NOT EXISTS %db_name% CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

echo [4/4] 正在导入数据 (advanced/data/install.sql)...
mysql -h localhost -P %db_port% -u root -p%db_pass% %db_name% < advanced/data/install.sql

echo.
echo ======================================================
echo 部署成功！
echo 现在双击 start_all.bat 即可启动网站。
echo ======================================================
pause