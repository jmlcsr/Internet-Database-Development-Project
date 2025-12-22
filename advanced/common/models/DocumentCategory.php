<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "document_category".
 *
 * @property int $id
 * @property string $category_name 文献类别
 */
class DocumentCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => '文献类别',
        ];
    }
}
