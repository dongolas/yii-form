<?php
namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use app\models\Forms;
use app\models\Formstasks;

class CformController extends Controller
{
    public function actionCform($id)
    {
        $cform = Forms::findOne($id);
        if (!$cform) {
            throw new NotFoundHttpException("Δεν βρέθηκε φόρμα!");
        }

        $form_tasks = Formstasks::findAll(['id_form' => $cform->id]);
        
        if (!$form_tasks) {
            throw new NotFoundHttpException("Δεν βρέθηκαν πεδία!");
        }  

        return $this->render('cform', [
            'cform' => $cform,
            'form_tasks' => $form_tasks,
        ]);
    }
}