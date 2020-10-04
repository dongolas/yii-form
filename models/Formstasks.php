<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forms_tasks".
 *
 * @property int $id
 * @property int $id_form
 * @property string $label
 * @property int $required
 */
class Formstasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'forms_tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_form', 'label'], 'required'],
            [['id_form', 'required'], 'integer'],
            [['label'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_form' => 'Id Form',
            'label' => 'Label',
            'required' => 'Required',
        ];
    }
}
