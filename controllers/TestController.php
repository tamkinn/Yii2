<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller{
    public function actionIndex(){
        return $this ->render('index');
    }

    public function actionPage(){
        $name = 'John';
        $surname = 'Doe';

//        return $this -> render('page',[
//        'name' => $name,
//        'surname' => $surname]
//        );
        return $this -> render('page',compact('name','surname'));
    }
}
