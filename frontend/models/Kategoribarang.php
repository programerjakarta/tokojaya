<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategoribarang".
 *
 * @property integer $idkategoribarang
 * @property string $kategoribarang
 *
 * @property Barang $barang
 */
class Kategoribarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategoribarang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategoribarang'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idkategoribarang' => 'Idkategoribarang',
            'kategoribarang' => 'Kategoribarang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['idbarang' => 'idkategoribarang']);
    }
}
