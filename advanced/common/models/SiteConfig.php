<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_config".
 *
 * @property int $id
 * @property string $key_name 配置键
 * @property string|null $value 配置值
 */
class SiteConfig extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key_name'], 'required'],
            [['value'], 'string'],
            [['key_name'], 'string', 'max' => 50],
            [['key_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key_name' => '配置键',
            'value' => '配置值',
        ];
    }
    
    // 动态显示网站配置项
    public static function get($key)
    {
        $config = self::findOne(['key_name' => $key]);
        return $config ? $config->value : "未配置[$key]";
    }
}
