<?php

namespace app\controllers;

use yii\web\Controller;

class GamesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSession()
    {
        return $this->render('session');
    }

    public function actionResults()
    {
            return $this->render('results');
    }
}
