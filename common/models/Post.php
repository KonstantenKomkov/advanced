<?php

namespace common\models;

use Carbon\Carbon;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "post".
 *
 * @property int $postId
 * @property string|null $title
 * @property string|null $text
 * @property int $userId
 * @property string|null $createdAt
 * @property string|null $updatedAt
 *
 * @property BaseUser $user
 */
class Post extends BasePost {

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'postId' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'userId' => 'UserID',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата редактирования',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge([], parent::rules());
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors(): array
    {
        return [
            'blameable' => [
                'class'              => BlameableBehavior::class,
                'createdByAttribute' => 'createdAt',
                'updatedByAttribute' => 'updatedAt',
            ],
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => 'updatedAt',
                'value' => Carbon::now($tz = 3),
            ],
        ];
    }
}