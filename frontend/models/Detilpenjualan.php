<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detilpenjualan".
 *
 * @property integer $iddetilpenjualan
 * @property integer $idpenjualan
 * @property integer $idbarang
 * @property integer $jmlbarang
 * @property integer $hrgsatuan
 *
 * @property Barang $idbarang0
 * @property Penjualan $idpenjualan0
 */
class Detilpenjualan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detilpenjualan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpenjualan', 'idbarang', 'jmlbarang', 'hrgsatuan'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddetilpenjualan' => 'Iddetilpenjualan',
            'idpenjualan' => 'Idpenjualan',
            'idbarang' => 'Idbarang',
            'jmlbarang' => 'Jmlbarang',
            'hrgsatuan' => 'Hrgsatuan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdbarang0()
    {
        return $this->hasOne(Barang::className(), ['idbarang' => 'idbarang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpenjualan0()
    {
        return $this->hasOne(Penjualan::className(), ['idpenjualan' => 'idpenjualan']);
    }
}
