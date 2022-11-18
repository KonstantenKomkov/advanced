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
class AccessToken extends BaseAccessToken
{
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tokenId' => 'Token ID',
            'userId' => 'User ID',
            'accessToken' => 'Access Token',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
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