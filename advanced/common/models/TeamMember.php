<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team_member".
 *
 * @property int $id
 * @property string $name 姓名
 * @property string $student_id 学号
 * @property string|null $division 组内分工
 */
class TeamMember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team_member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'student_id'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['student_id'], 'string', 'max' => 20],
            [['division'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'student_id' => '学号',
            'division' => '组内分工',
        ];
    }
}
