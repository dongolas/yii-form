<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'custom-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
    <h1><?= $this->title = $cform->form_title; ?></h1>

    <?= $form->field($cform, 'form_title') ?>
    ...other input fields...
    
    <h1><?= $this->title = $cform->form_title; ?></h1>
    <?= print_r($form_tasks) ?>
    foreach ($new_form_tasks as $o) {
    echo $new_m[$o];
}

    <?= Html::submitButton('ΟΚ', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>