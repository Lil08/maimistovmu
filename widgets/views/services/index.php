<?php

use yii\helpers\{Html, HtmlPurifier};

/**@var $services */

?>

<?php foreach (array_chunk($services, 4) as $service) { ?>
<div class="row my-3">
    <?php foreach ($service as $item) {?>
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
             data-aos-delay="200">
            <div class="icon-box">
                <div class="icon"><i class="bi bi-<?= Html::encode($item->code ?? 'file') ?>"></i></div>
                <h4><a href=""><?= Html::encode($item->name) ?></a></h4>
                <p><?= HtmlPurifier::process($item->text) ?></p>
            </div>
        </div>
    <?php } ?>
</div>
<?php } ?>




