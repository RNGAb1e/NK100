<?php
/**
* Team: Ctrl F5 Team
* Coding by 成达 1711316, 20190717
* This is the models of frontend. 
*/
namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_souvenir".
 *
 * @property integer $sid
 * @property string $sname
 * @property integer $sprice
 * @property string $sinfo
 */
class NkSouvenir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_souvenir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sname'], 'required'],
            [['sprice'], 'integer'],
            [['sname'], 'string', 'max' => 20],
            [['sinfo'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sid' => '纪念品id',
            'sname' => '纪念品名字',
            'sprice' => '纪念品价格',
            'sinfo' => '纪念品信息',
        ];
    }
}
