<?php

namespace common\models;

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

}