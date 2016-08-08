<?php

namespace app\modules\site\controllers;

use yii\web\Controller;
use yii\web\ErrorAction;

/**
 * Default controller for the `site` module
 */
class DefaultController extends Controller
{
    public function actions()
    {
        return [
          'error' => [
            'class' => ErrorAction::className()
          ],
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
}
