<?php
return [
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@app/mail',
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.gmail.com',
        'username' => 'emailpost08@gmail.com',
        'password' => 'sajtpocta987',
        'port' => '587',
        'encryption' => 'tls'
    ],
    'useFileTransport' => false
]
?>
