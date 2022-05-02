<?php

use yii\helpers\{Html, HtmlPurifier};

/**
 * @var $contact
 * */
?>
<div class="section-title">
    <h2>Контакты</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
        fugiat sit in iste officiis commodi quidem hic quas.</p>
</div>

<div class="row">

<div class="col-lg-5 d-flex align-items-stretch">
    <div class="info">
        <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Адрес:</h4>
            <p><?= Html::encode($contact->address) ?></p>
        </div>

        <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p> <?= Html::encode($contact->email) ?></p>
        </div>

        <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Телефон:</h4>
            <p><?= Html::encode($contact->phone) ?></p>
        </div>

        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aebf4dc9103444ce1479d662c7e18f3adda0de01545aba3a99c3394d8767951af&amp;source=constructor" width="100%" height="290" frameborder="0"></iframe>
    </div>

</div>
