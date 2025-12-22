<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "assignment".
 *
 * @property int $id
 * @property string $title 作业标题
 * @property string $file_name 物理文件名
 * @property string|null $file_type 存放目录(team/personal)
 * @property string|null $author 提交人
 */
class Assignment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'file_name'], 'required'],
            [['file_type'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['file_name'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '作业标题',
            'file_name' => '物理文件名',
            'file_type' => '存放目录(team/personal)',
            'author' => '提交人',
        ];
    }
}
