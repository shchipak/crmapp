<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string */

app\assets\ApplicationUiAssetBundle::register($this);


?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <?= Html::csrfMetaTags() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="container">
        <div class="authorization-indicator">
            <? if (Yii::$app->user->isGuest): ?>
                <?= Html::tag('span', 'guest'); ?>
                <?= Html::a('login', '/site/login'); ?>
            <? else: ?>
                <?= Html::tag('span', Yii::$app->user->identity->username); ?>
                <?= Html::a('logout', 'site/logout'); ?>
            <? endif; ?>
        </div>
        <?= $content ?>
        <footer class="footer"><?= Yii::powered(); ?></footer>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>