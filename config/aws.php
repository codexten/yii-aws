<?php

use codexten\yii\aws\components\Aws;

return [
    'components' => [
        'aws' => [
            'class' => Aws::class,
            'key' => $params['aws.key'],
            'secret' => $params['aws.secret'],
            'region' => $params['aws.region'],
        ],
    ],
];