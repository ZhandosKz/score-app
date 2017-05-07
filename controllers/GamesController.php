<?php

namespace app\controllers;

use yii\web\Controller;

class GamesController extends Controller
{
    public $enableCsrfValidation = false;

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
        $players = [
            [
                'name' => 'Andrew',
                'score' => 14,
                'avatar' => '/images/players/1.png',
            ],
            [
                'name' => 'Matt',
                'score' => 6,
                'avatar' => '/images/players/matt.png',
                'isCurrent' => true,
            ],
            [
                'name' => 'Alex',
                'score' => 2,
                'avatar' => '/images/players/alex.png',
                'isCurrent' => true,
            ],
            [
                'name' => 'Tom',
                'score' => 2,
                'avatar' => '/images/players/3.png',
            ],  [
                'name' => 'Ruchi',
                'score' => 1,
                'avatar' => '/images/players/6.png',
            ],
            [
                'name' => 'Vasu',
                'score' => 1,
                'avatar' => '/images/players/5.png',
            ],
            [
                'name' => 'Natt',
                'score' => 1,
                'avatar' => '/images/players/4.png',
            ],
            [
                'name' => 'Michael',
                'score' => 1,
                'avatar' => '/images/players/2.png',
            ],
        ];

        return $this->render('results', [
            'players' => $players,
        ]);
    }
}
