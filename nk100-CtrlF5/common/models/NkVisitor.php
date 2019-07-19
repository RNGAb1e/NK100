<?php
/**
* Team:Ctrl F5 Team
* Coding by 单宇航 1711319,20190717
* This is NkVisitor of common models. 
*/

namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_visitor".
 *
 * @property integer $viid
 * @property string $viname
 * @property string $viinfo
 */
class NkVisitor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_visitor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['viname', 'viinfo'], 'required'],
            [['viname'], 'string', 'max' => 20],
            [['viinfo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'viid' => '来宾id',
            'viname' => '来宾姓名',
            'viinfo' => '来宾介绍',
        ];
    }
}
