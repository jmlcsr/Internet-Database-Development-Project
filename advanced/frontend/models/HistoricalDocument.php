<?php
namespace common\models;

use Yii;

class HistoricalDocument extends \yii\db\ActiveRecord
{
    public function getCategory()
    {
        // 注意：如果你之前的分类模型叫 DocumentCategory
        return $this->hasOne(DocumentCategory::className(), ['id' => 'category_id']);
    }
}