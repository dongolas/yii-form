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

    <?= $form->field($cform, 'id') ?>
    
    <?=$form_tasks[0]->label?> : <input type="text" name="name" value="">

    <?= Html::submitButton('ΟΚ', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>
