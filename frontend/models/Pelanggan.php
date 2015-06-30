<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property integer $idpelanggan
 * @property string $pelanggancol
 *
 * @property Penjualan[] $penjualans
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pelanggancol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpelanggan' => 'Idpelanggan',
            'pelanggancol' => 'Pelanggancol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::className(), ['idpelanggan' => 'idpelanggan']);
    }
}
