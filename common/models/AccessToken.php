<?php

namespace common\models;

/**
 * This is the model class for table "accesstoken".
 *
 * @property int $tokenId
 * @property int $userId
 * @property string|null $accessToken
 * @property string|null $createdAt
 * @property string|null $updatedAt
 *
 * @property User $user
 */
class AccessToken extends BaseAccesstoken {

    public function attributeLabels()
    {
        return [
            'tokenId' => 'ID',
            'userId' => 'UserID',
            'accessToken' => 'Токен',
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