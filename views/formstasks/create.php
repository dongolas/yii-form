<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formstasks */

$this->title = 'Προσθέστε ένα πεδίο στη φόρμα';
$this->params['breadcrumbs'][] = ['label' => 'Formstasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formstasks-create">

<h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

</div>
