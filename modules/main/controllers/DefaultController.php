<?php

namespace modules\main\controllers;

use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::className()
            ]
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Renders the about view for the module
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Renders the contact view for the module
     * @return string
     */
    public function actionContact()
    {
        return $this->render('contact');
    }
}
