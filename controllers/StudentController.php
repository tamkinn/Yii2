<?php

namespace app\controllers;

use app\models\Student;
use yii\web\Controller;

class StudentController extends Controller
{
    public function actionIndex(){
        $students = Student::find()->all();
        //$names = $students -> pro;
        //$email = $students -> email;
        return $this->render('index', compact('students'));
        //$students = Student::find()->all();
        //return $this->render('index', compact('names', 'email'));
    }
}