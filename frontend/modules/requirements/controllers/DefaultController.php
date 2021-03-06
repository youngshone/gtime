<?php

namespace app\modules\requirements\controllers;


/**
 * Default controller for the `requirements` module
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
