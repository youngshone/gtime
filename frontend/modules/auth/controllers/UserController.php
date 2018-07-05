<?php

namespace app\modules\auth\controllers;

use yii\web\Controller;

/**
 * Default controller for the `auth` module
 */
class UserController extends \app\components\AuthController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionLogin(){
        //
        return $this->render('login.tpl');
    }
}
