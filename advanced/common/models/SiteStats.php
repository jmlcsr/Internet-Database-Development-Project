<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_stats".
 *
 * @property int $id
 * @property string $stat_name 指标名称
 * @property int $stat_value 指标数值
 * @property string|null $stat_type 类型标识
 */
class SiteStats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_stats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stat_name', 'stat_value'], 'required'],
            [['stat_value'], 'integer'],
            [['stat_name'], 'string', 'max' => 50],
            [['stat_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stat_name' => '指标名称',
            'stat_value' => '指标数值',
            'stat_type' => '类型标识',
        ];
    }
}
