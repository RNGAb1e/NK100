<?php

/**
* Team: Ctrl F5 Team
* Coding 崔凯 1711317, 20170717
* This is the 新闻 model file. 
*/

namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_news".
 *
 * @property integer $nid
 * @property string $ntitle
 */
class NkNews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ntitle'], 'required'],
            [['ntitle'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nid' => '新闻id',
            'ntitle' => '新闻标题',
        ];
    }
}
