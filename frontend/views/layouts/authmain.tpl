{strip}
{use class="Yii"}
{use class="yii\helpers\Html"}
{use class="frontend\assets\AppAsset"}
{AppAsset::register($this)|void}
{$this->beginPage()}
<!DOCTYPE html>
<html lang="{Yii::$app->language}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {Html::csrfMetaTags()}
    <title>{Html::encode($this->title)}</title>
    {$this->head()}
</head>
<body>{$this->beginBody()}
    <div class="site-logo-and-search">
        <div class="site-logo-bd">
            <img src="/img/logo.jpg"/>
        </div>
    </div>
    <div class="main-link-nav">
        
    </div>
    
    <div class="auth-content">
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