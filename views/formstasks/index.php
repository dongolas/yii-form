<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormstasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formstasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formstasks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Προσθέστε ένα πεδίο', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_form',
            'label',
            'required',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
