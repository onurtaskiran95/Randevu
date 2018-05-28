<?php

namespace kouosl\Randevu\models;

use Yii;

/**
 * This is the model class for table "tblAppointment".
 *
 * @property int $appointment_id
 * @property string $appointment_date
 * @property string $appointment_name
 * @property string $appointment_text
 */
class TblAppointment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblAppointment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['appointment_date', 'appointment_name', 'appointment_text'], 'required'],
            [['appointment_date'], 'safe'],
            [['appointment_name', 'appointment_text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'appointment_id' => 'Randevu ID',
            'appointment_date' => 'Randevu Tarihi',
            'appointment_name' => 'Randevu Verilecek Kişi',
            'appointment_text' => 'Randevu İçeriği',
        ];
    }
}
