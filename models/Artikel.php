<?php

namespace app\models;

use Yii;

class Artikel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artikel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['konten'], 'string'],
            [['kategori_id'], 'integer'],
            [['created_at'], 'safe'],
            [['judul'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'konten' => 'Konten',
            'kategori_id' => 'Kategori ID',
            'created_at' => 'Created At',
        ];
    }

    public function upload($fileName)
    {
        if ($this->validate()) {
            $this->foto->saveAs('images/' . $fileName . '.' . $this->foto->extension);
            return true;
        } else {
            return false;
        }
    }
}
