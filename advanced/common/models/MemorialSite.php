<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "memorial_site".
 *
 * @property int $id
 * @property string $site_name 名称
 * @property string|null $province 所属省份
 * @property string|null $address 详细地址
 * @property string|null $intro 遗址介绍
 */
class MemorialSite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'memorial_site';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_name'], 'required'],
            [['intro'], 'string'],
            [['site_name'], 'string', 'max' => 100],
            [['province'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => '名称',
            'province' => '所属省份',
            'address' => '详细地址',
            'intro' => '遗址介绍',
        ];
    }
}
