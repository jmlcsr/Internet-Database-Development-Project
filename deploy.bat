@echo off
chcp 65001 > nul
title 占位符小组 - 项目一键部署
echo ======================================================
echo           占位符小组 · 抗战胜利80周年项目部署
echo ======================================================

set db_port=3306
set db_name=yii
set /p db_pass=请输入您的 MySQL root 密码 (直接回车表示空密码): 

echo.
echo [1/3] 正在创建数据库 %db_name%...
mysql -h localhost -P %db_port% -u root -p%db_pass% -e "CREATE DATABASE IF NOT EXISTS %db_name% CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

echo [2/3] 正在导入数据库文件...

mysql -h localhost -P %db_port% -u root -p%db_pass% %db_name% < advanced/data/install.sql

echo [3/3] 正在初始化 Yii2 环境...
cd advanced
echo 0 | php init --overwrite=All
cd ..

echo.
echo ======================================================
echo 部署完成！请运行 start_all.bat 启动网站。
pause