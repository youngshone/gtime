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
//        $userid = 288934;
//        echo "before safe operate:".$userid."<br/>";
//        $encrypted_data = \common\models\DataSecurity::encrypt($userid);
//        echo "after safe operate:".$encrypted_data."<br/>";
//        $userid_decrypted = \common\models\DataSecurity::decrypt($encrypted_data);
//        echo "after safe decrypted:".$userid_decrypted."<br/>";exit;
        
        
        echo $str = "288934asdfasdf"; 
        echo "<br/>";
$authcode = \common\models\DataSecurity::authcode($str,'ENCODE',0); //加密 
echo $authcode."<br/>";
echo \common\models\DataSecurity::authcode($authcode,'DECODE',0); //解密 
exit;
        return $this->render('index.tpl');
    }
}
