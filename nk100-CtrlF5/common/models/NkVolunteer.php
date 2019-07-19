<?php
/**
* Team:Ctrl F5 Team
* Coding by 单宇航 1711319,20190717
* This is NkVolunteer of common models. 
*/


namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_volunteer".
 *
 * @property integer $void
 * @property string $voname
 * @property string $voinfo
 * @property integer $vonumber
 */
class NkVolunteer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_volunteer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['voname', 'voinfo', 'vonumber'], 'required'],
            [['vonumber'], 'integer'],
            [['voname'], 'string', 'max' => 20],
            [['voinfo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'void' => '志愿者id',
            'voname' => '志愿者姓名',
            'voinfo' => '志愿者信息',
            'vonumber' => '志愿者学号',
        ];
    }
}
