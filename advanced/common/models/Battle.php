<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "battle".
 *
 * @property int $id
 * @property string $name 战役名称
 * @property string|null $location 发生地点
 * @property string|null $date_period 时间跨度
 * @property string|null $result 战役结果
 * @property int|null $casualty_count 伤亡数据
 */
class Battle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'battle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['result'], 'string'],
            [['casualty_count'], 'integer'],
            [['name', 'location', 'date_period'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '战役名称',
            'location' => '发生地点',
            'date_period' => '时间跨度',
            'result' => '战役结果',
            'casualty_count' => '伤亡数据',
        ];
    }
}
