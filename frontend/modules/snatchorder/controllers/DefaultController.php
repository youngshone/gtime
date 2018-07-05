<?php

namespace app\modules\snatchorder\controllers;


/**
 * Default controller for the `snatchorder` module
 */
class DefaultController extends \app\components\FrontController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
