<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "guestbook".
 *
 * @property int $id
 * @property string $nickname 访客昵称
 * @property string $content 留言感悟
 * @property string|null $created_at 留言时间
 * @property int|null $is_audit 是否审核通过
 */
class Guestbook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guestbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nickname', 'content'], 'required'],
            [['content'], 'string'],
            [['created_at'], 'safe'],
            [['is_audit'], 'integer'],
            [['nickname'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => '访客昵称',
            'content' => '留言感悟',
            'created_at' => '留言时间',
            'is_audit' => '是否审核通过',
        ];
    }

    // 留言时间自动生成
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => false,
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}
