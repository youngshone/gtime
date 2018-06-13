<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
//use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <div class="site-nav">
        <div class="site-nav-bd">
            
            <ul class="site-nav-bd-l">
                <li>
                    <div class="site-nav-menu-hd">
                        
                        <?php if (Yii::$app->user->isGuest) { ?>
                        <a href="#">欢迎来到淘手游</a>
                        <a href="/login">登录</a><a href="/signup">注册</a>
                        <?php }else{  ?>
                        <a href="#">欢迎来到淘手游,<?php echo Yii::$app->user->identity->username ?></a>
                            <a href="/logout">退出</a>
                        <?php } ?>
                        <a href="#">手机逛xx</a>
                    </div>
                </li>
                </ul>
            <ul class="site-nav-bd-r">
                <li>
                    <div class="site-nav-menu-hd">
                        <a href="#">我的XX</a><a href="#">网站导航</a><a href="#">手机逛xx</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="site-logo-and-search">
        <div class="site-logo-bd">
            <img src="/img/logo.jpg"/>
        </div>
    </div>
    <div class="main-link-nav">
        
    </div>
<?php $this->beginBody() ?>
    <div class="site-content">
        <?= $content ?>
    </div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
