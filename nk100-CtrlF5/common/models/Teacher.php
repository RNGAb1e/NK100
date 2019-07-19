<?php
/**
* Team:Ctrl F5 Team
* Coding by 董肖 1711320,20190717
* This is Teacher of common models. 
*/
namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_teacher".
 *
 * @property integer $tid
 * @property string $tname
 * @property string $tinfo
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tname', 'tinfo'], 'required'],
            [['tname'], 'string', 'max' => 20],
            [['tinfo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => 'Tid',
            'tname' => 'Tname',
            'tinfo' => 'Tinfo',
        ];
    }
}
