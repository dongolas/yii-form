<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $form_title;

    public function rules()
    {
        return [
            [['name'], 'required']
        ];
    }
}
