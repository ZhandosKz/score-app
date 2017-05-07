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
        $players = [
            [
                'name' => 'Andrew',
                'score' => 14,
                'avatar' => '/images/players/matt.png',
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
                'avatar' => '/images/players/matt.png',
            ],  [
                'name' => 'Ruchi',
                'score' => 1,
                'avatar' => '/images/players/matt.png',
            ],
            [
                'name' => 'Vasu',
                'score' => 1,
                'avatar' => '/images/players/matt.png',
            ],
            [
                'name' => 'Natt',
                'score' => 1,
                'avatar' => '/images/players/matt.png',
            ],
            [
                'name' => 'Michael',
                'score' => 1,
                'avatar' => '/images/players/matt.png',
            ],
        ];

        return $this->render('results', [
            'players' => $players,
        ]);
    }
}
