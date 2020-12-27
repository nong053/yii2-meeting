<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'Smart Meeting',
    'language' => 'th_TH',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

     
        // 'urlManager' => [
        //     'enablePrettyUrl' => true,
        //     'enableStrictParsing' => true,
        //     'showScriptName' => false,
        //     'rules' => [
        //          ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
        //     ],
        // ],
        
];
