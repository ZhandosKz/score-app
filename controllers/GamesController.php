<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

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
                'name' => 'Vasu',
                'score' => 2,
                'avatar' => '/images/players/vasu.png',
                'isCurrent' => true,
            ],
            [
                'name' => 'Alex',
                'score' => 2,
                'avatar' => '/images/players/alex.png',
            ],
            [
                'name' => 'Tom',
                'score' => 1,
                'avatar' => '/images/players/3.png',
            ],
            [
                'name' => 'Ruchi',
                'score' => 1,
                'avatar' => '/images/players/6.png',
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

        try {
            Yii::$app->mailer->compose([
                'html' => 'congratulations',
            ])
                ->setTo([
                    'kravetsss@gmail.com',
                    'zhandos.90@gmail.com',
                ])
                ->setFrom(['support@trytopic.com' => 'Scorer'])
                ->setSubject('Congratulations')
                ->send();
        } catch (\Exception $e) {
            Yii::error($e->getMessage());
        }

        return $this->render('results', [
            'players' => $players,
        ]);
    }
}
