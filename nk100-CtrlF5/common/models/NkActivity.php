<?php
/**
* Team:Ctrl F5 Team
* Coding by 陈雨农 1711315,20190717
* This is the NkActivity model of common models. 
*/
namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_activity".
 *
 * @property integer $aid
 * @property string $atitle
 */
class NkActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['atitle'], 'required'],
            [['atitle'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'atitle' => 'Atitle',
        ];
    }
}
