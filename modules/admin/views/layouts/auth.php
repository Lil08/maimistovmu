<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\ContactWidget;
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <meta name="keywords"
          content="адвокат, юрист, сыктывкар, помощь, права, контакты, коми, гражданский, административный, уголовный, юридический, консультация, услуга, дело ">
    <meta name="description"
          content="Маймистов Максим Юрьевич. Юридическая помощь и защита граждан в г Сыктывкар и области.">
    <meta name="robots" content="index, nofollow">
    <meta name="yandex" content="noyaca">
    <meta name="yandex-verification" content="f65bef3b4d712a2c"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">Маймистов М.Ю.</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Главная</a></li>
                <li><a class="nav-link scrollto" href="/index.php#about">Обо мне</a></li>
                <li><a class="nav-link scrollto" href="/index.php#services">Юридическая помощь</a></li>
                <li><a class="nav-link scrollto" href="/index.php#contact">Контакты</a></li>
                <li><a class="getstarted scrollto" href="/index.php#contact">Связаться</a></li>
                <?php if (!Yii::$app->user->isGuest) { ?>
                    <li><a class="getstarted scrollto" href="/admin"><?= Yii::$app->user->identity['username'] ?></a>
                    </li>
                    <li><a class="nav-link scrollto" href="/admin/auth/logout">Выйти</a></li>
                <?php } ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<?php $this->beginBody() ?>

<div class="container">
    <div class="row"><?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], ]); ?></div>
</div>
<div class="container">
    <?= $content ?>
</div>

<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <?= ContactWidget::widget(['view' => 'footer']) ?>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Полезные ссылки</h4>
                    <ul>
                        <li><a class="bx bx-chevron-right active" href="#hero">Главная</a></li>
                        <li><a class="bx bx-chevron-right" href="#about">Обо мне</a></li>
                        <li><a class="bx bx-chevron-right" href="#services">Юридическая помощь</a></li>
                        <li><a class="bx bx-chevron-right" href="#contact">Контакты</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; <strong><span>Маймистов Максим Юрьевич</span>, 2022</strong>.
        </div>
    </div>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
<?php $this->endBody() ?>

<?php $this->endPage() ?>
