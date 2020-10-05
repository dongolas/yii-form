<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\data\ArrayDataProvider;

$provider = new ArrayDataProvider;
$num_form_tasks = $provider->getCount($form_tasks);

$form = ActiveForm::begin([
    'id' => 'custom-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<h1><?= $this->title = $cform->form_title; ?></h1>

<?php foreach ($form_tasks as $form_task): ?>
    <?=$form_task->label?> : <input type="text" name="name" value="" ><br/><br/>

<?php endforeach; ?>


    <?= Html::submitButton('ΟΚ', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>
