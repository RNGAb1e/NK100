<?php
/**
* Team: Ctrl F5 Team
* Coding by 成达 1711316, 20190717
* This is the models of frontend. 
*/
namespace common\models;

use Yii;

/**
 * This is the model class for table "nk_history".
 *
 * @property integer $hid
 * @property string $hcontent
 */
class NkHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nk_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hcontent'], 'required'],
            [['hcontent'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hid' => '历史故事id',
            'hcontent' => '故事内容',
        ];
    }
}
