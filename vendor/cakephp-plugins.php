<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Proffer' => $baseDir . '/vendor/davidyell/proffer/',
        'cake3upload' => $baseDir . '/plugins/cake3upload/',
        'utils' => $baseDir . '/plugins/utils/'
    ]
];
