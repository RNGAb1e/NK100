<?php

/**
* Team: Ctrl F5 Team
* Coding 崔凯 1711317, 20170717
* This is the 成员 model file. 
*/

namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_member".
 *
 * @property integer $mid
 * @property string $mname
 * @property integer $num
 */
class NkMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mname', 'num'], 'required'],
            [['num'], 'integer'],
            [['mname'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mid' => '成员id',
            'mname' => '成员姓名',
            'num' => '成员学号',
        ];
    }
}
