<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\mail\BaseMailer;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionMail()
    {
        /**
         * @var BaseMailer $mailer
         */
        $mailer = Yii::$app->mailer;
        $mailer->htmlLayout  = 'layouts/html2';

        $mailer->compose([
            'html' => 'sleepy',
        ])
            ->setTo('kravetsss@gmail.com')
            ->setFrom(['support@trytopic.com' => 'Scorer'])
            ->setSubject('Congratulations')
            ->send();
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('intro');
    }
}
