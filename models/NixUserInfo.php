<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%short_urls_info}}".
 *
 * @property integer $id
 * @property integer $short_url_id
 * @property string $user_agent
 * @property string $user_refer
 * @property string $user_ip
 * @property string $date
 *
 * @property ShortUrls $shortUrl
 */
class NixUserInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%short_urls_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short_url_id', 'user_agent', 'user_ip', 'date'], 'required'],
            [['short_url_id'], 'integer'],
            [['date'], 'safe'],
            [['user_platform','user_agent', 'user_refer', 'user_ip', 'user_country', 'user_city'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('adurls', 'ID'),
            'short_url_id' => Yii::t('adurls', 'SHORT_URL_ID'),
            'user_platform' => Yii::t('adurls', 'USER_PLATFORM'),
            'user_agent' => Yii::t('adurls', 'USER_AGENT'),
            'user_refer' => Yii::t('adurls', 'USER_REFER'),
            'user_ip' => Yii::t('adurls', 'USER_IP'),
            'user_country' => Yii::t('adurls', 'USER_COUNTRY'),
            'user_city' => Yii::t('adurls', 'USER_CITY'),
            'date' => Yii::t('adurls', 'DATE'),
        ];
    }
}
