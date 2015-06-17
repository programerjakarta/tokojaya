<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@app/views'
             ],
         ],
    ],
    ],
];
