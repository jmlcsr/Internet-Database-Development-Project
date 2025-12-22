<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hero".
 *
 * @property int $id
 * @property string $name 英雄姓名
 * @property string|null $lifetime 生卒年
 * @property string|null $rank 职务/军衔
 * @property string $description 英勇事迹
 * @property string|null $image_url 照片存放路径
 */
class Hero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['name', 'lifetime'], 'string', 'max' => 100],
            [['rank'], 'string', 'max' => 50],
            [['image_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '英雄姓名',
            'lifetime' => '生卒年',
            'rank' => '职务/军衔',
            'description' => '英勇事迹',
            'image_url' => '照片存放路径',
        ];
    }
}
