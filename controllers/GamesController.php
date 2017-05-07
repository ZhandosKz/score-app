<?php

namespace app\controllers;

use yii\web\Controller;

class GamesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGame()
    {
        return $this->render('game');
    }
}