{strip}
{use class="Yii"}
{use class="yii\helpers\Html"}
{use class="frontend\assets\AppAsset"}
{AppAsset::register($this)|void}
{$this->beginPage()}
<!DOCTYPE html>
<html lang="{Yii::$app->language}">
<head>
    <meta charset="{Yii::$app->charset}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {Html::csrfMetaTags()}
    <title>{Html::encode($this->title)}</title>
    {$this->head()}
</head>
<body>{$this->beginBody()}
    <div class="site-nav">
        <div class="site-nav-bd">
            
            <ul class="site-nav-bd-l">
                <li>
                    <div class="site-nav-menu-hd">
                        
                        {if Yii::$app->user->isGuest}
                        <a href="#">欢迎来到淘手游</a>
                        <a href="/login">登录</a><a href="/signup">注册</a>
                        {else}
                        <a href="#">欢迎来到淘手游,{Yii::$app->user->identity->username}</a>
                            <a href="/logout">退出</a>
                        {/if}
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
    
    <div class="site-content">
        {$content}
    </div>
<footer class="footer">
    <div class="footcontent">
    <div class="container">
        底部
    </div>
    </div>
</footer>

{$this->endBody()}
</body>
</html>
{$this->endPage()}
{/strip}