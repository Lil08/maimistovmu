<?php

use yii\helpers\{Html, HtmlPurifier};

/**@var $services */

?>

<?php foreach ($services as $service) { ?>
    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
         data-aos-delay="200">
        <div class="icon-box">
            <div class="icon"><i class="bx bx-<?= Html::encode($service->code ?: 'file') ?>"></i></div>
            <h4><a href=""><?= Html::encode($service->name) ?></a></h4>
            <p><?= HtmlPurifier::process($service->text) ?></p>
        </div>
    </div>
<?php } ?>




