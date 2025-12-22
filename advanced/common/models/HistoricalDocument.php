<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "historical_document".
 *
 * @property int $id
 * @property int $category_id 所属分类ID
 * @property string $title 文献标题
 * @property string $content 史料全文
 * @property string|null $source 史料来源
 * @property string|null $period 所属时期
 * @property int|null $is_featured 是否推荐到首页
 */
class HistoricalDocument extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'historical_document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'content'], 'required'],
            [['category_id', 'is_featured'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 200],
            [['source'], 'string', 'max' => 100],
            [['period'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => '所属分类ID',
            'title' => '文献标题',
            'content' => '史料全文',
            'source' => '史料来源',
            'period' => '所属时期',
            'is_featured' => '是否推荐到首页',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(DocumentCategory::className(), ['id' => 'category_id']);
    }
}
