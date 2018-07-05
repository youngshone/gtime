<?php

namespace app\modules\index\controllers;


/**
 * Default controller for the `index` module
 */
class DefaultController extends \app\components\FrontController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        
        return $this->render('index.tpl');
    }
}
