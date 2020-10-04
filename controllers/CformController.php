<?php
namespace app\controllers;

use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

use app\models\Forms;
use app\models\Formstasks;

class CformController extends Controller
{
    public function actionCform($id)
    {
        $cform = Forms::findOne($id);
        if (!$cform) {
            throw new NotFoundHttpException("The cform was not found.");
        }

        $form_tasks = Formstasks::findAll('id_form');
       

        if (!$form_tasks) {
            throw new NotFoundHttpException("Δεν βρέθηκαν πεδία!");
        }
   
/*         $cform->scenario = 'index';
        $form_tasks->scenario = 'index'; */
         
/*         if ($cform->load(Yii::$app->request->post()) && $form_tasks->load(Yii::$app->request->post())) {
            $isValid = $cform->validate();
            $isValid = $form_tasks->validate() && $isValid;
            if ($isValid) {
                $cform->save(false);
                $form_tasks->save(false);
                return $this->redirect(['cform/view', 'id' => $id]);
            }
        }
  */       

        return $this->render('cform', [
            'cform' => $cform,
            'form_tasks' => $form_tasks,
        ]);
    }
}