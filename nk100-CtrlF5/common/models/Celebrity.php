<?php
/**
* Team:Ctrl F5 Team
* Coding by 董肖 1711320,20190717
* This is Celebrity of common models. 
*/

namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_celebrity".
 *
 * @property integer $ceid
 * @property string $cename
 * @property string $ceinfo
 */
class Celebrity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_celebrity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cename', 'ceinfo'], 'required'],
            [['cename'], 'string', 'max' => 20],
            [['ceinfo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ceid' => 'Ceid',
            'cename' => 'Cename',
            'ceinfo' => 'Ceinfo',
        ];
    }
}
