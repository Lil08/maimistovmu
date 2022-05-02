<?php

use yii\helpers\Html;

/**
 * @var $contact
 * */
?>
<div class="col-lg-9 col-md-6 footer-contact">
    <h3>Маймистов М.Ю.</h3>
    <p>
        <?= Html::encode($contact->address) ?> <br><br>
        <strong>Телефон:</strong> <?= Html::encode($contact->phone) ?><br>
        <strong>Email:</strong> <?= Html::encode($contact->email) ?><br>
    </p>
</div>
