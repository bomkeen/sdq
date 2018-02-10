<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clinic_q".
 *
 * @property int $id
 * @property string $q
 * @property string $clinic
 * @property string $date
 */
class ClinicQ extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clinic_q';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['q'], 'string', 'max' => 255],
            [['clinic'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'q' => 'Q',
            'clinic' => 'Clinic',
            'date' => 'Date',
        ];
    }
}
