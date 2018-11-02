<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'redis' => [
            'class' => yii\redis\Connection::className(),
        ],

        'queue' => [
            'class' => \yii\queue\redis\Queue::className(),
            'redis' => 'redis',
            'channel' => 'queue',
        ],


    ],
];
