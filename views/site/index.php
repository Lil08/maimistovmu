<?php

/**
 * @var $this yii\web\View
 * @var $descr
 * @var $services
 * @var $model \app\models\Call
 */

use app\widgets\ContactWidget;
use app\widgets\ServicesWidget;
use yii\helpers\{Html, HtmlPurifier};
use yii\widgets\ActiveForm;

$this->title = 'Адвокат Маймистов Максим Юрьевич';

?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                 data-aos="fade-up" data-aos-delay="200">
                <h1>Если победа — это к нам</h1>
                <h2>Какой бы ни была ваша проблема — есть стратегии, как ее разрешить</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#contact" class="btn-get-started scrollto">Связаться со мной</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="img/hero.webp" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Маймистов Максим Юрьевич</h2>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <p>
                        <?= HtmlPurifier::process($descr->text) ?>
                    </p>
                    <br>
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                </div>
                <div class="col-lg-3 pt-4 pt-lg-0">
                    <a href="#сall" class="btn-learn-more">Связаться со мной</a>
                </div>
                <div class="col-lg-4 pt-4 pt-lg-0">
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>
                                    Какой у вас опыт работы? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Мой опыт работы адвокатом более ___ лет
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                                    Какой процент выгранных дел? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Результат на 90%
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                                    Сколько стоят ваши услуги? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Стоимость от ___
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                     style="background-image: url('img/why-us.png');" data-aos="zoom-in" data-aos-delay="150">
                    &nbsp;
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Юридическая помощь</h2>
                <p>Защита физических и юридеческих лиц.</p>
            </div>

            <div class="row">
                <?= ServicesWidget::widget() ?>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Связаться со мной</h3>
                    <p> Помогаю даже в трудных ситуациях, когда другие разводят руками</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Связаться со мной</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <?= ContactWidget::widget() ?>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <!--                <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
                <?php $form = ActiveForm::begin(['options' => ['class' => 'php-email-form']]) ?>

                <div class="form-group">
                    <?= $form->field($model, 'email')->textInput(['class' => 'form-control', 'placeholder' => 'Введите ваш email']) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'text')->textarea(['class' => 'form-control', 'placeholder' => 'Введите текст сообщения', 'rows' => '10']) ?>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
<!--                    --><?php //if (Yii::$app->session->getFlash('contactFormSubmitted')) { ?>
<!--                        <div class="sent-message">Your message has been sent. Thank you!</div>-->
<!--                    --><?php //} ?>
                </div>
                <div class="text-center">
                    <?= Html::submitButton('Отправить', ['class' => '']) ?>
                </div>
                <?php $form::end() ?>
            </div>
        </div>
        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->

