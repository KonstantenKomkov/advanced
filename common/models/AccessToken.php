<?php

namespace common\models;

use Carbon\Carbon;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

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