<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;

$form = ActiveForm::begin([
    'id' => 'custom-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
    <h1><?= $this->title = $cform->form_title; ?></h1>

    <?= $form->field($cform, 'form_title') ?>
    ...other input fields...
    <?= $form->field($cform, 'id') ?>
    
    <?= print_r(array_sum($form_tasks)). '<br/>' ?>
    <?=$form_tasks[0]->label?> : <input type="text" name="name" value="">
    <?= print_r($form_tasks) ?>
    <?= Html::submitButton('ΟΚ', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>
