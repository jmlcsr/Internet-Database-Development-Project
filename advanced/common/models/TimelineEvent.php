<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "timeline_event".
 *
 * @property int $id
 * @property int $event_year 发生年份
 * @property string|null $event_date 具体日期
 * @property string $title 事件标题
 * @property string|null $content 事件背景及意义
 */
class TimelineEvent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'timeline_event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_year', 'title'], 'required'],
            [['event_year'], 'integer'],
            [['content'], 'string'],
            [['event_date'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_year' => '发生年份',
            'event_date' => '具体日期',
            'title' => '事件标题',
            'content' => '事件背景及意义',
        ];
    }
}
