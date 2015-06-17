<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "suplier".
 *
 * @property integer $idsuplier
 * @property string $nmsuplier
 */
class Suplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nmsuplier'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idsuplier' => 'Idsuplier',
            'nmsuplier' => 'Nmsuplier',
        ];
    }
}
