<?php
/**
* Team:Ctrl F5 Team
* Coding by 陈雨农 1711315,20190717
* This is the NkComment model of common models. 
*/
namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_comment".
 *
 * @property integer $coid
 * @property string $cocontent
 */
class NkComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cocontent'], 'required'],
            [['cocontent'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'coid' => 'Coid',
            'cocontent' => 'Cocontent',
        ];
    }
}
